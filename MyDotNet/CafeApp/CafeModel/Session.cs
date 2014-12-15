using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.ComponentModel;
using System.Xml;
using System.Xml.Serialization;

namespace CafeModel
{
    public class Session
    {
        public Session() { }
        public Session(
            long Id = 0,
            long IdTable = 0,
            long IdUser = 0,
            long IdCustomer = 0,
            long IdEmployee = 0,
            DateTime DateTime = new DateTime(),
            DateTime DateTimeEnd = new DateTime(),
            string Note = "",
            int Status = 0,
            int DiscountValue = 0,
            int DiscountPercent = 0,
            int Surtax = 0,
            int Payment = 0,
            int State = 0
            )
        {
            this.Id = Id;
            this.IdTable = IdTable;
            this.IdUser = IdUser;
            this.IdCustomer = IdCustomer;
            this.IdEmployee = IdEmployee;
            this.DateTime = DateTime;
            this.DateTimeEnd = DateTimeEnd;
            this.Note = Note;
            this.Status = Status;
            this.DiscountValue = DiscountValue;
            this.DiscountPercent = DiscountPercent;
            this.Surtax = Surtax;
            this.Payment = Payment;
            this.State = State;
        }

        [Browsable(false)]
        public long Id { get; set; }

        [Browsable(false)]
        public long IdTable { get; set; }

        /*
        [Browsable(false)]
        public Table Table
        {
            get
            {
                var mTable = new TableXML();
                return mTable.get(this.IdTable);
            }        
        }
        */
        [Browsable(false)]
        public long IdUser { get; set; }

        [Browsable(false)]
        public long IdEmployee { get; set; }

        /*
        [Browsable(false)]
        public Employee Employee
        {
            get
            {
                var mEmployee = new EmployeeXML();
                return mEmployee.get(this.IdEmployee);
            }        
        }*/

        [Browsable(false)]
        public long IdCustomer { get; set; }

        /*
        [Browsable(false)]
        public Customer Customer
        {
            get
            {
                var mCustomer = new CustomerXML();
                return mCustomer.get(this.IdCustomer);
            }           
        }
        */

        [DisplayName("Bắt đầu")]
        public DateTime DateTime { get; set; }

        [DisplayName("Kết thúc")]
        public DateTime DateTimeEnd { get; set; }

        [Browsable(false)]
        public string Note { get; set; }

        [Browsable(false)]
        public int Status { get; set; }
        [DisplayName("Tình trạng")]
        public string StatusPrint
        {
            get
            {
                if (this.Status == 1)
                    return "Đã tính";
                return "Chưa tính";
            }
        }

        [Browsable(false)]
        public int DiscountValue { get; set; }

        [Browsable(false)]
        public int DiscountPercent { get; set; }

        [Browsable(false)]
        public int Surtax { get; set; }

        [Browsable(false)]
        public int Payment { get; set; }

        [Browsable(false)]
        public int State { get; set; }

        /*
        [Browsable(false)]
        public long Value
        {
            get
            {
                long Value = 0;
                foreach (var SD in this.getDetailAll())
                {
                    Value += SD.Value;
                }
                return Value;
            }            
        }

        public IList<SessionDetail> getDetailAll()
        {
            SessionDetailXML mSessionDetail = new SessionDetailXML();
            return mSessionDetail.getBySession(this.Id);
        }

        public int getRowPosition(long IdCourse)
        {
            int Index = 0;
            foreach (var SD in this.getDetailAll())
            {
                if (SD.IdCourse == IdCourse)
                {
                    return Index;
                }
                Index++;
            }
            return Index;
        }

        public int exist(long IdCourse)
        {
            int Index = 0;
            foreach (var SD in this.getDetailAll())
            {
                if (SD.IdCourse == IdCourse)
                {
                    break;
                }
                Index++;
            }
            if (Index == this.getDetailAll().Count) return -1;
            return Index;
        }
         */
    }

    [XmlRoot("SessionList")]
    [XmlInclude(typeof(Session))]
    public class SessionList
    {
        [XmlArray("SessionArray")]
        [XmlArrayItem("Session")]
        public List<Session> list = new List<Session>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public SessionList() { }
        public SessionList(string Name)
        {
            this.Name = Name;
        }
    }
}
