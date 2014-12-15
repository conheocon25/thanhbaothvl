using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.ComponentModel;
using System.Xml;
using System.Xml.Serialization;

namespace CafeModel
{
    public class Customer
    {
        public Customer() { }
        public Customer(
            long Id = 0,
            string Name = "",
            int Type = 0,
            string Card = "",
            string Phone = "",
            string Address = "",
            string Note = "",
            int Discount = 0,
            int State = 0
            )
        {
            this.Id = Id;
            this.Name = Name;
            this.Type = Type;
            this.Card = Card;
            this.Phone = Phone;
            this.Address = Address;
            this.Note = Note;
            this.Discount = Discount;
            this.State = State;
        }

        [DisplayName("Id")]
        public long Id { get; set; }

        [DisplayName("Tên")]
        public string Name { get; set; }

        [DisplayName("Kiểu")]
        public int Type { get; set; }

        [DisplayName("Thẻ")]
        public string Card { get; set; }

        [DisplayName("Điện thoại")]
        public string Phone { get; set; }

        [DisplayName("Địa chỉ")]
        public string Address { get; set; }

        [DisplayName("Ghi chú")]
        public string Note { get; set; }

        [DisplayName("Giảm giá")]
        public int Discount { get; set; }

        [Browsable(false)]
        public int State { get; set; }
    }

    [XmlRoot("CustomerList")]
    [XmlInclude(typeof(Customer))]
    public class CustomerList
    {
        [XmlArray("CustomerArray")]
        [XmlArrayItem("Customer")]
        public List<Customer> list = new List<Customer>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public CustomerList() { }
        public CustomerList(string Name)
        {
            this.Name = Name;
        }
    }
}
