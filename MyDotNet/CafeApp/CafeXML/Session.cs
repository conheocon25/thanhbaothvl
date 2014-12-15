using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using CafeModel;
using CafeGateway;

namespace CafeXML
{
    public class Session
    {
        public SessionList List;
        public CafeGateway.Session Gateway;

        public Session(bool bSync = true)
        {
            Gateway = new CafeGateway.Session();
            if (bSync==true)
                List = Gateway.XML2List();

        }

        //TRUY XUẤT DỮ LIỆU
        public IList<CafeModel.Session> getAll()
        {
            var ObjAll =
                from p in List.list
                where p.State != 3
                select p;

            return ObjAll.ToList();
        }

        //Lấy về danh sách Session theo Bàn
        public IList<CafeModel.Session> getByTable(long IdTable, int limit = 10)
        {
            var ObjAll =
                from p in List.list
                where p.State != 3 && p.IdTable == IdTable
                select p;
            return ObjAll.OrderByDescending(c => c.DateTime).Take(limit).ToList();
        }

        //Lấy về danh sách Session theo Bàn
        public IList<CafeModel.Session> getByDate(DateTime DS, DateTime DE)
        {
            var ObjAll =
                from p in List.list
                where p.State != 3 && p.DateTime >= DS && p.DateTime <=DE
                select p;
            return ObjAll.OrderByDescending(c => c.DateTime).ToList();
        }

        public CafeModel.Session current(long IdTable)
        {
            var ObjAll =
                from p in List.list
                where p.State != 3 && p.IdTable == IdTable
                select p;
            if (ObjAll.ToList().Count == 0)
                return null;

            return ObjAll.OrderByDescending(c => c.DateTime).First();
        }

        public CafeModel.Session get(long Id)
        {
            var Session = List.list.FirstOrDefault(Obj => Obj.Id == Id);
            return Session;
        }

        public void add(CafeModel.Session Session)
        {
            List.list.Add(Session);
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }

        public void update(CafeModel.Session Session)
        {
            foreach (var P in List.list)
            {
                if (P.Id == Session.Id)
                {
                    P.IdCustomer = Session.IdCustomer;
                    P.IdEmployee = Session.IdEmployee;
                    P.IdTable = Session.IdTable;
                    P.IdUser = Session.IdUser;
                    P.Note = Session.Note;
                    P.Payment = Session.Payment;
                    P.State = Session.State;
                    P.Surtax = Session.Surtax;
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
