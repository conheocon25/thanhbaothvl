using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.ComponentModel;
using System.Xml;
using System.Xml.Serialization;

namespace CafeModel
{
    public class SessionDetail
    {
        public SessionDetail() { }
        public SessionDetail(
            long Id = 0,
            long IdSession = 0,
            long IdCourse = 0,
            string NameCourse = "",
            float Count = 0,
            long Price = 0,
            int Enable = 0,
            long IdEmployee = 0,
            int State = 0
            )
        {
            this.Id = Id;
            this.IdSession = IdSession;
            this.IdCourse = IdCourse;
            this.NameCourse = NameCourse;
            this.Count = Count;
            this.Price = Price;
            this.Enable = Enable;
            this.IdEmployee = IdEmployee;
            this.State = State;
        }

        [Browsable(false)]
        public long Id { get; set; }

        [Browsable(false)]
        public long IdSession { get; set; }

        [Browsable(false)]
        public long IdCourse { get; set; }

        [DisplayName("Món ăn")]
        public string NameCourse { get; set; }

        [DisplayName("Số lượng")]
        public float Count { get; set; }

        [DisplayName("Giá")]
        public long Price { get; set; }

        [DisplayName("Thành tiền")]
        public long Value
        {
            get { return (long)(this.Price * this.Count); }
        }

        [Browsable(false)]
        public int Enable { get; set; }

        [Browsable(false)]
        public long IdEmployee { get; set; }

        [Browsable(false)]
        public int State { get; set; }
    }

    [XmlRoot("SessionDetailList")]
    [XmlInclude(typeof(SessionDetail))]
    public class SessionDetailList
    {
        [XmlArray("SessionDetailArray")]
        [XmlArrayItem("SessionDetail")]
        public List<SessionDetail> list = new List<SessionDetail>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public SessionDetailList() { }
        public SessionDetailList(string Name)
        {
            this.Name = Name;
        }
    }
}
