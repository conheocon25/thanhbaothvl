using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using CafeModel;
using CafeGateway;

namespace CafeXML
{
    public class Unit
    {
        public UnitList List;
        public CafeGateway.Unit Gateway;

        public Unit(bool bSync = true)
        {
            Gateway = new CafeGateway.Unit();
            if (bSync == true)
                List = Gateway.XML2List();

        }

        //TRUY XUẤT DỮ LIỆU
        public IList<CafeModel.Unit> getAll()
        {
            var ObjAll =
                from p in List.list
                where p.State != 3
                select p;

            return ObjAll.ToList();
        }

        public CafeModel.Unit get(long Id)
        {
            var Unit = List.list.FirstOrDefault(Obj => Obj.Id == Id);
            return Unit;
        }

        public void add(CafeModel.Unit Unit)
        {
            List.list.Add(Unit);
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }

        public void update(CafeModel.Unit Unit)
        {
            //Đánh dấu có thay đổi
            Unit.State = 2;

            (from U in List.list
             where U.Id == Unit.Id
             select U).ToList().ForEach(U => U = Unit);

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
