using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using CafeModel;
using CafeGateway;

namespace CafeXML
{
    public class Customer
    {
        public CustomerList List;
        public CafeGateway.Customer Gateway;

        public Customer(bool bSync = true)
        {
            Gateway = new CafeGateway.Customer();
            if (bSync == true)
                List = Gateway.XML2List();

        }

        //TRUY XUẤT DỮ LIỆU
        public IList<CafeModel.Customer> getAll()
        {
            var ObjAll =
                from p in List.list
                where p.State != 3
                select p;

            return ObjAll.ToList();
        }

        public CafeModel.Customer get(long Id)
        {
            var Customer = List.list.FirstOrDefault(Obj => Obj.Id == Id);
            return Customer;
        }

        public void add(CafeModel.Customer Customer)
        {
            List.list.Add(Customer);
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }

        public void update(CafeModel.Customer Customer)
        {
            foreach (var P in List.list)
            {
                if (P.Id == Customer.Id)
                {
                    P.Name = Customer.Name;
                    P.Address = Customer.Address;
                    P.Card = Customer.Card;
                    P.Discount = Customer.Discount;
                    P.Note = Customer.Note;
                    P.Phone = Customer.Phone;
                    P.Type = Customer.Type;
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
