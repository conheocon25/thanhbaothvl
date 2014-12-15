using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using CafeModel;
using CafeGateway;

namespace CafeXML
{
    public class Category
    {
        public CategoryList List;
        public CafeGateway.Category Gateway;

        public Category(bool bSync = true)
        {
            Gateway = new CafeGateway.Category();
            if (bSync == true)
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

        //TRUY XUẤT DỮ LIỆU
        public IList<CafeModel.Category> getAll()
        {
            var ObjAll =
                from p in List.list
                where p.State != 3
                select p;

            return ObjAll.ToList();
        }

        public CafeModel.Category get(long Id)
        {
            var Category = List.list.FirstOrDefault(Obj => Obj.Id == Id);
            return Category;
        }

        public void add(CafeModel.Category Category)
        {
            List.list.Add(Category);
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }

        public void update(CafeModel.Category Obj)
        {
            (from U in List.list
             where U.Id == Obj.Id
             select U).ToList().ForEach(U => U = Obj);

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
       
        public void restart()
        {
            List = Gateway.XML2List();
        }
    }
}