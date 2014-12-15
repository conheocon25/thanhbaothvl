using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using CafeModel;
using CafeGateway;

namespace CafeXML
{
    public class Employee
    {
        public EmployeeList List;
        public CafeGateway.Employee Gateway;

        public Employee(bool bSync = true)
        {
            Gateway = new CafeGateway.Employee();
            if (bSync==true)
                List = Gateway.XML2List();
        }

        //TRUY XUẤT DỮ LIỆU
        public IList<CafeModel.Employee> getAll()
        {
            var ObjAll =
                from p in List.list
                where p.State != 3
                select p;

            return ObjAll.ToList();
        }

        public CafeModel.Employee get(long Id)
        {
            var Employee = List.list.FirstOrDefault(Obj => Obj.Id == Id);
            return Employee;
        }

        public void add(CafeModel.Employee Employee)
        {
            List.list.Add(Employee);
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }

        public void update(CafeModel.Employee Employee)
        {
            foreach (var P in List.list)
            {
                if (P.Id == Employee.Id)
                {
                    P.Name = Employee.Name;
                    P.Address = Employee.Address;
                    P.Card = Employee.Card;
                    P.Gender = Employee.Gender;
                    P.Job = Employee.Job;
                    P.Phone = Employee.Phone;
                    P.SalaryBase = Employee.SalaryBase;
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
