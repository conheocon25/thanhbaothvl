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
    public class Config
    {
        public Config() { }
        public Config(int Id = 0, string Param = "", string Value = "", int State = 0)
        {
            this.Id = Id;
            this.Param = Param;
            this.Value = Value;
            this.State = State;
        }

        [DisplayName("Id")]
        public int Id { get; set; }

        [DisplayName("Tham số")]
        public string Param { get; set; }

        [DisplayName("Giá trị")]
        public string Value { get; set; }

        [Browsable(false)]
        public int State { get; set; }
    }

    [XmlRoot("ConfigList")]
    [XmlInclude(typeof(Config))]
    public class ConfigList
    {
        [XmlArray("ConfigArray")]
        [XmlArrayItem("Config")]
        public List<Config> list = new List<Config>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public ConfigList() { }
        public ConfigList(string Name)
        {
            this.Name = Name;
        }
    }
}
