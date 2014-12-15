using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using CafeModel;
using CafeGateway;

namespace CafeXML
{
    public class Course
    {
        CourseList List;
        public CafeGateway.Course Gateway;

        public Course(bool bSync = true)
        {
            Gateway = new CafeGateway.Course();
            if (bSync==true)
                List = Gateway.XML2List();
        }

        //TRUY XUẤT DỮ LIỆU
        public IList<CafeModel.Course> getAll()
        {
            var ObjAll =
                from p in List.list
                where p.State != 3
                select p;
            return ObjAll.ToList();
        }

        public IList<CafeModel.Course> getByCategory(long IdCategory)
        {
            var ObjAll =
                from p in List.list
                where p.State != 3 && p.IdCategory == IdCategory
                select p;
            return ObjAll.ToList();
        }

        public IList<CafeModel.Course> getByName(string NameSearch)
        {
            var ObjAll =
                from p in List.list
                where p.State != 3 && p.Name.ToLower().Contains(NameSearch.ToLower())
                select p;
            return ObjAll.ToList();
        }

        public CafeModel.Course get(long Id)
        {
            var Course = List.list.FirstOrDefault(Obj => Obj.Id == Id);
            return Course;
        }

        public void add(CafeModel.Course Course)
        {
            List.list.Add(Course);
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }

        public void update(CafeModel.Course Course)
        {
            foreach (var P in List.list)
            {
                if (P.Id == Course.Id)
                {
                    P.Name = Course.Name;
                    P.Enable = Course.Enable;
                    P.IdCategory = Course.IdCategory;
                    P.IsDiscount = Course.IsDiscount;
                    P.Prepare = Course.Prepare;
                    P.Price = Course.Price;
                    P.Unit = Course.Unit;
                    P.State = 2;
                }
            }
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }

        public void delete(long Id)
        {
            foreach (var P in List.list)
            {
                if (P.Id == Id) { P.State = 3; }
            }
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }
        //Hàm hỗ trợ SynC
        public int getCountChange()
        {
            var ObjAll = this.getAll();
            int Count = 0;

            foreach (var Obj in ObjAll)
            {
                if (Obj.State != 0)
                {
                    Count++;
                }
            }
            return Count;
        }
        public void restart()
        {
            List = Gateway.XML2List();
        }
    }
}
