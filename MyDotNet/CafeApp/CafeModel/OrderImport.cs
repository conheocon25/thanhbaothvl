using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.ComponentModel;
using System.Xml;
using System.Xml.Serialization;

namespace CafeModel
{
    public class OrderImport
    {
        public OrderImport() { }
        public OrderImport(
            int Id = 0,
            long IdSupplier = 0,
            DateTime Date = new DateTime(),
            string Note = "",
            int State = 0
            )
        {
            this.Id = Id;
            this.IdSupplier = IdSupplier;
            this.Date = Date;
            this.Note = Note;
            this.State = State;
        }

        [DisplayName("Id")]
        public int Id { get; set; }

        [DisplayName("Nhà cung cấp")]
        public long IdSupplier { get; set; }

        [DisplayName("Ngày")]
        public DateTime Date { get; set; }

        [DisplayName("Ghi chú")]
        public string Note { get; set; }

        [Browsable(false)]
        public int State { get; set; }
    }

    [XmlRoot("OrderImportList")]
    [XmlInclude(typeof(OrderImport))]
    public class OrderImportList
    {
        [XmlArray("OrderImportArray")]
        [XmlArrayItem("OrderImport")]
        public List<OrderImport> list = new List<OrderImport>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public OrderImportList() { }
        public OrderImportList(string Name)
        {
            this.Name = Name;
        }
    }
}
