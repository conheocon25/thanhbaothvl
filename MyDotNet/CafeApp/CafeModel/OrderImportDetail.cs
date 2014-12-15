using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.ComponentModel;
using System.Xml;
using System.Xml.Serialization;

namespace CafeModel
{
    public class OrderImportDetail
    {
        public OrderImportDetail() { }
        public OrderImportDetail(
            long Id = 0,
            long IdOrder = 0,
            long IdResource = 0,
            long Count = 0,
            long Price = 0,
            int State = 0
            )
        {
            this.Id = Id;
            this.IdOrder = IdOrder;
            this.IdResource = IdResource;
            this.Count = Count;
            this.Price = Price;
            this.State = State;
        }

        [DisplayName("Id")]
        public long Id { get; set; }

        [DisplayName("Đơn hàng")]
        public long IdOrder { get; set; }

        [DisplayName("Nguồn hàng")]
        public long IdResource { get; set; }

        [DisplayName("Số lượng")]
        public long Count { get; set; }

        [DisplayName("Giá")]
        public long Price { get; set; }

        [Browsable(false)]
        public int State { get; set; }
    }

    [XmlRoot("OrderImportDetailList")]
    [XmlInclude(typeof(OrderImportDetail))]
    public class OrderImportDetailList
    {
        [XmlArray("OrderImportDetailArray")]
        [XmlArrayItem("OrderImportDetail")]
        public List<OrderImportDetail> list = new List<OrderImportDetail>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public OrderImportDetailList() { }
        public OrderImportDetailList(string Name)
        {
            this.Name = Name;
        }
    }
}
