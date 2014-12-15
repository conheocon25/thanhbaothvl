using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.ComponentModel;
using System.Xml;
using System.Xml.Serialization;

namespace CafeModel
{
    public class Unit
    {
        public Unit() { }
        public Unit(long Id = 0, string Name = "", int State = 0)
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

    [XmlRoot("UnitList")]
    [XmlInclude(typeof(Unit))]
    public class UnitList
    {
        [XmlArray("UnitArray")]
        [XmlArrayItem("Unit")]
        public List<Unit> list = new List<Unit>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public UnitList() { }
        public UnitList(string Name)
        {
            this.Name = Name;
        }
    }
}
