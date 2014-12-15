using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.ComponentModel;
using System.Xml;
using System.Xml.Serialization;

namespace CafeModel
{
    public class TrackDailyCourse
    {
        public TrackDailyCourse() { }
        public TrackDailyCourse(
            long Id = 0,
            long IdCourse = 0,
            string CourseName = "",                        
            DateTime DateTime = new DateTime(),
            float Count = 0,
            int State = 0
            )
        {
            this.Id = Id;
            this.IdCourse = IdCourse;
            this.CourseName = CourseName;
            this.DateTime = DateTime;
            this.Count = Count;
            this.State = State;
        }

        [Browsable(false)]
        public long Id { get; set; }

        [Browsable(false)]
        public long IdCourse { get; set; }

        [DisplayName("Tên món")]
        public string CourseName { get; set; }

        [Browsable(false)]
        public DateTime DateTime { get; set; }
        
        [DisplayName("Số lượng")]
        public float Count { get; set; }

        [Browsable(false)]
        public int State { get; set; }
    }

    [XmlRoot("TrackDailyCourseList")]
    [XmlInclude(typeof(TrackDailyCourse))]
    public class TrackDailyCourseList
    {
        [XmlArray("TrackDailyCourseArray")]
        [XmlArrayItem("TrackDailyCourse")]
        public List<TrackDailyCourse> list = new List<TrackDailyCourse>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public TrackDailyCourseList() { }
        public TrackDailyCourseList(string Name)
        {
            this.Name = Name;
        }
    }
}
