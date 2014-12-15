using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.ComponentModel;
using System.Xml;
using System.Xml.Serialization;

namespace CafeModel
{
    public class Employee
    {
        public Employee() { }
        public Employee(
            long Id = 0,
            string Name = "",
            string Job = "",
            int Gender = 0,
            string Phone = "",
            string Address = "",
            long SalarayBase = 0,
            string Card = "",
            int State = 0
            )
        {
            this.Id = Id;
            this.Name = Name;
            this.Job = Job;
            this.Gender = Gender;
            this.Phone = Phone;
            this.Address = Address;
            this.SalaryBase = SalaryBase;
            this.Card = Card;
            this.State = State;
        }

        [DisplayName("Id")]
        public long Id { get; set; }

        [DisplayName("Tên")]
        public string Name { get; set; }

        [DisplayName("Giới tính")]
        public int Gender { get; set; }

        [DisplayName("Nghề nghiệp")]
        public string Job { get; set; }

        [DisplayName("Thẻ")]
        public string Card { get; set; }

        [DisplayName("Điện thoại")]
        public string Phone { get; set; }

        [DisplayName("Địa chỉ")]
        public string Address { get; set; }

        [DisplayName("Lương CB")]
        public long SalaryBase { get; set; }

        [Browsable(false)]
        public int State { get; set; }
    }

    [XmlRoot("EmployeeList")]
    [XmlInclude(typeof(Employee))]
    public class EmployeeList
    {
        [XmlArray("EmployeeArray")]
        [XmlArrayItem("Employee")]
        public List<Employee> list = new List<Employee>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public EmployeeList() { }
        public EmployeeList(string Name)
        {
            this.Name = Name;
        }
    }
}
