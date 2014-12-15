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
    public class Category
    {
        public Category() { }
        public Category(long Id = 0, string Name = "", string Picture="", long Enable = 1, int State = 0)
        {
            this.Id = Id;
            this.Name = Name;
            this.State = State;
            this.Picture = Picture;
            this.Enable = Enable;
        }

        [DisplayName("Id")]
        public long Id { get; set; }

        [DisplayName("Tên")]
        public string Name { get; set; }

        [Browsable(false)]
        public string Picture { get; set; }

        [Browsable(false)]
        public long Enable { get; set; }

        [Browsable(false)]
        public int State { get; set; }

    }

    [XmlRoot("CategoryList")]
    [XmlInclude(typeof(Category))]
    public class CategoryList
    {
        [XmlArray("CategoryArray")]
        [XmlArrayItem("Category")]
        public List<Category> list = new List<Category>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public CategoryList() { }
        public CategoryList(string Name)
        {
            this.Name = Name;
        }
    }
}
