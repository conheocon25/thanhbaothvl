using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.ComponentModel;
using System.Xml;
using System.Xml.Serialization;

namespace CafeModel
{
    public class TrackCustomer
    {
    }

    [XmlRoot("TrackCustomerList")]
    [XmlInclude(typeof(TrackCustomer))]
    public class TrackCustomerList
    {
        [XmlArray("TrackCustomerArray")]
        [XmlArrayItem("TrackCustomer")]
        public List<TrackCustomer> list = new List<TrackCustomer>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public TrackCustomerList() { }
        public TrackCustomerList(string Name)
        {
            this.Name = Name;
        }
    }
}
