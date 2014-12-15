using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Xml;
using System.Xml.Serialization;

namespace CafeModel
{
    public class Domain
    {
        public Domain() { }
        public Domain(long Id = 0, string Name = "", int State = 0)
        {
            this.Id = Id;
            this.Name = Name;
            this.State = State;
        }

        [DisplayName("Id")]
        public long Id { get; set; }

        [DisplayName("Tên")]
        public string Name { get; set; }

        [Browsable(false)]
        public int State { get; set; }
                
    }
    [XmlRoot("DomainList")]
    [XmlInclude(typeof(Domain))]
    public class DomainList
    {
        [XmlArray("DomainArray")]
        [XmlArrayItem("Domain")]
        public List<Domain> list = new List<Domain>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public DomainList() { }
        public DomainList(string Name)
        {
            this.Name = Name;
        }
    }
}
