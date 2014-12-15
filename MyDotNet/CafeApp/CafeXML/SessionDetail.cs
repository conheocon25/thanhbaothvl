using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using CafeModel;
using CafeGateway;

namespace CafeXML
{
    public class SessionDetail
    {
        public SessionDetailList List;
        public CafeGateway.SessionDetail Gateway;

        public SessionDetail(bool bSync = true)
        {
            Gateway = new CafeGateway.SessionDetail();
            if (bSync==true)
                List = Gateway.XML2List();

        }

        //TRUY XUẤT DỮ LIỆU
        public IList<CafeModel.SessionDetail> getAll()
        {
            var ObjAll =
                from p in List.list
                where p.State != 3
                select p;

            return ObjAll.ToList();
        }

        public IList<CafeModel.SessionDetail> getBySession(long IdSession)
        {
            var ObjAll =
                from p in List.list
                where p.State != 3 && p.IdSession == IdSession
                select p;
            if (ObjAll.ToList().Count == 0) return null;
            return ObjAll.ToList();
        }

        public long getBySessionValue(long IdSession)
        {
            long Value = 0;
            var SDAll = this.getBySession(IdSession);
            if (SDAll != null) 
            {
                foreach (var SD in SDAll)
                {
                    Value += SD.Value;
                }
            }            
            return Value;
        }
                
        public CafeModel.SessionDetail get(long Id)
        {
            var SessionDetail = List.list.FirstOrDefault(Obj => Obj.Id == Id);
            return SessionDetail;
        }

        public void add(CafeModel.SessionDetail SessionDetail)
        {
            List.list.Add(SessionDetail);
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }

        public void update(CafeModel.SessionDetail SessionDetail)
        {
            foreach (var P in List.list)
            {
                if (P.Id == SessionDetail.Id)
                {
                    P.IdCourse = SessionDetail.IdCourse;                    
                    P.IdEmployee = SessionDetail.IdEmployee;
                    P.IdSession = SessionDetail.IdSession;
                    P.Count = SessionDetail.Count;
                    P.Price = SessionDetail.Price;
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
