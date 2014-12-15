using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.ComponentModel;
using System.Xml;
using System.Xml.Serialization;

namespace CafeModel
{
    public class TrackDaily
    {        
        public TrackDaily() { }
        public TrackDaily(
            long Id = 0,
            string TableName = "",            
            string CustomerName = "",
            string EmployeeName = "",
            DateTime DateTime = new DateTime(),            
            long Value = 0,
            int State = 0
            )
        {
            this.Id = Id;
            this.TableName = TableName;            
            this.CustomerName = CustomerName;
            this.EmployeeName = EmployeeName;
            this.DateTime = DateTime;                        
            this.Value = Value;
            this.State = State;
        }

        [Browsable(false)]
        public long Id { get; set; }

        [DisplayName("Tên bàn")]
        public string TableName { get; set; }

        [DisplayName("Nhân viên")]
        public string EmployeeName { get; set; }

        [DisplayName("Thời gian")]
        public DateTime DateTime{ get; set; }

        [DisplayName("Khách hàng")]
        public string CustomerName { get; set; }

        [DisplayName("Phiếu")]
        public long Value { get; set; }

        [Browsable(false)]
        public int State { get; set; }
    }

    [XmlRoot("TrackDailyList")]
    [XmlInclude(typeof(TrackDaily))]
    public class TrackDailyList
    {
        [XmlArray("TrackDailyArray")]
        [XmlArrayItem("TrackDaily")]
        public List<TrackDaily> list = new List<TrackDaily>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public TrackDailyList() { }
        public TrackDailyList(string Name)
        {
            this.Name = Name;
        }
    }
}
