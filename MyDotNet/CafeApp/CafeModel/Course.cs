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
    public class Course
    {
        public Course() { }
        public Course(
            long Id = 0,
            long IdCategory = 0,
            string Name = "",
            string Unit = "",
            long Price = 0,
            int Prepare = 0,
            int IsDiscount = 0,
            int Enable = 0,
            int State = 0
            )
        {
            this.Id = Id;
            this.IdCategory = IdCategory;
            this.Name = Name;
            this.Unit = Unit;
            this.Price = Price;
            this.Prepare = Prepare;
            this.IsDiscount = IsDiscount;
            this.Enable = Enable;
            this.State = State;
        }

        [DisplayName("Id")]
        public long Id { get; set; }

        [Browsable(false)]
        public long IdCategory { get; set; }

        [DisplayName("Tên")]
        public string Name { get; set; }

        [DisplayName("ĐVT")]
        public string Unit { get; set; }

        [DisplayName("Giá")]
        public long Price { get; set; }

        [DisplayName("Tên / Giá")]
        public string NamePrice
        {
            get
            {
                return Name + " (" + Price.ToString("#,###") + ")";
            }
        }

        [Browsable(false)]
        public int Prepare { get; set; }

        [Browsable(false)]
        public int IsDiscount { get; set; }

        [Browsable(false)]
        public int Enable { get; set; }

        [Browsable(false)]
        public int State { get; set; }
    }

    [XmlRoot("CourseList")]
    [XmlInclude(typeof(Course))]
    public class CourseList
    {
        [XmlArray("CourseArray")]
        [XmlArrayItem("Course")]
        public List<Course> list = new List<Course>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public CourseList() { }
        public CourseList(string Name)
        {
            this.Name = Name;
        }
    }
}
