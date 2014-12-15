using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using CafeModel;
using CafeGateway;

namespace CafeXML
{
    public class Table
    {
        public TableList List;
        public CafeGateway.Table Gateway;

        public Table(bool bSync = true)
        {
            Gateway = new CafeGateway.Table();
            if (bSync==true)
                List = Gateway.XML2List();
        }

        //Lấy toàn bộ danh sách
        public IList<CafeModel.Table> getAll()
        {
            var ObjAll =
                from p in List.list
                where p.State != 3
                select p;

            return ObjAll.ToList();
        }

        //Lấy danh sách bàn theo khu vực
        public IList<CafeModel.Table> getByDomain(long IdDomain)
        {
            var ObjAll =
                from p in List.list
                where p.State != 3 && p.IdDomain == IdDomain
                select p;

            return ObjAll.ToList();

        }


        public CafeModel.Table get(long Id)
        {
            var Table = List.list.FirstOrDefault(Obj => Obj.Id == Id);
            return Table;
        }

        public void add(CafeModel.Table Table)
        {
            List.list.Add(Table);
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }

        public void update(CafeModel.Table Table)
        {
            foreach (var P in List.list)
            {
                if (P.Id == Table.Id)
                {
                    P.Name = Table.Name;
                    P.IdDomain = Table.IdDomain;

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
