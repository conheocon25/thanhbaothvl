using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.ComponentModel;
using System.Xml;
using System.Xml.Serialization;

namespace CafeModel
{
    public class Track
    {
    }

    [XmlRoot("TrackList")]
    [XmlInclude(typeof(Track))]
    public class TrackList
    {
        [XmlArray("TrackArray")]
        [XmlArrayItem("Track")]
        public List<Track> list = new List<Track>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public TrackList() { }
        public TrackList(string Name)
        {
            this.Name = Name;
        }
    }
}
