using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.ComponentModel;
using System.Xml;
using System.Xml.Serialization;

namespace CafeModel
{
    public class Table
    {
        public Table() { }
        public Table(long Id = 0, long IdDomain = 0, string Name = "", int State = 0)
        {
            this.Id = Id;
            this.IdDomain = IdDomain;
            this.Name = Name;
            this.State = State;
        }

        [DisplayName("Id")]
        public long Id { get; set; }

        [Browsable(false)]
        public long IdDomain { get; set; }

        [DisplayName("Tên")]
        public string Name { get; set; }

        [Browsable(false)]
        public int State { get; set; }
    }

    [XmlRoot("TableList")]
    [XmlInclude(typeof(Table))]
    public class TableList
    {
        [XmlArray("TableArray")]
        [XmlArrayItem("Table")]
        public List<Table> list = new List<Table>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public TableList() { }
        public TableList(string Name)
        {
            this.Name = Name;
        }
    }
}
