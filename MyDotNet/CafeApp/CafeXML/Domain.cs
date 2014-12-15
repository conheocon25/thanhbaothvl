using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using CafeModel;
using CafeGateway;

namespace CafeXML
{
    public class Domain
    {
        public DomainList List;
        public CafeGateway.Domain Gateway;

        public Domain(bool bSync = true)
        {
            Gateway = new CafeGateway.Domain();
            if (bSync == true)
                List = Gateway.XML2List();
        }

        //TRUY XUẤT DỮ LIỆU
        public IList<CafeModel.Domain> getAll()
        {
            var ObjAll =
                from p in List.list
                where p.State != 3
                select p;

            return ObjAll.ToList();
        }

        public CafeModel.Domain get(long Id)
        {
            var Domain = List.list.FirstOrDefault(Obj => Obj.Id == Id);
            return Domain;
        }

        public void add(CafeModel.Domain Domain)
        {
            List.list.Add(Domain);
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }

        public void update(CafeModel.Domain Domain)
        {
            foreach (var P in List.list)
            {
                if (P.Id == Domain.Id)
                {
                    P.Name = Domain.Name;
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
