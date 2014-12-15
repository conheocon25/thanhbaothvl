using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.ComponentModel;
using System.Xml;
using System.Xml.Serialization;

namespace CafeModel
{    
    public class TrackDailyDomain
    {
        public TrackDailyDomain() { }
        public TrackDailyDomain(
            long Id = 0,
            long IdDomain = 0,
            string DomainName = "",
            DateTime DateTime = new DateTime(),
            long Value = 0,
            int State = 0
            )
        {
            this.Id = Id;
            this.IdDomain = IdDomain;
            this.DomainName = DomainName;
            this.DateTime = DateTime;
            this.Value = Value;
            this.State = State;
        }

        [Browsable(false)]
        public long Id { get; set; }

        [Browsable(false)]
        public long IdDomain { get; set; }

        [DisplayName("Tên món")]
        public string DomainName { get; set; }

        [Browsable(false)]
        public DateTime DateTime { get; set; }

        [DisplayName("Giá trị")]
        public long Value { get; set; }

        [Browsable(false)]
        public int State { get; set; }
    }

    [XmlRoot("TrackDailyDomainList")]
    [XmlInclude(typeof(TrackDailyDomain))]
    public class TrackDailyDomainList
    {
        [XmlArray("TrackDailyDomainArray")]
        [XmlArrayItem("TrackDailyDomain")]
        public List<TrackDailyDomain> list = new List<TrackDailyDomain>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public TrackDailyDomainList() { }
        public TrackDailyDomainList(string Name)
        {
            this.Name = Name;
        }
    }
}
