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
    public class User
    {
        public User() { }
        public User(
            long Id = 0,
            string Name = "",
            string Email = "",
            string Password = "",
            int Gender = 0,
            string Note = "",
            DateTime DateCreated = new DateTime(),
            DateTime DateUpdated = new DateTime(),
            DateTime DateActivity = new DateTime(),
            int Type = 0,
            string Code = "",
            int State = 0
            )
        {
            this.Id = Id;
            this.Name = Name;
            this.Email = Email;
            this.Password = Password;
            this.Gender = Gender;
            this.Note = Note;
            this.DateCreated = DateCreated;
            this.DateUpdated = DateUpdated;
            this.DateActivity = DateActivity;
            this.Type = Type;
            this.Code = Code;
            this.State = State;
        }

        [DisplayName("Id")]
        public long Id { get; set; }

        [DisplayName("Tên")]
        public string Name { get; set; }

        [DisplayName("Email")]
        public string Email { get; set; }

        [DisplayName("Mật khẩu")]
        public string Password { get; set; }

        [DisplayName("Giới tính")]
        public int Gender { get; set; }

        [DisplayName("Ghi chú")]
        public string Note { get; set; }

        [DisplayName("Ngày tạo")]
        public DateTime DateCreated { get; set; }

        [DisplayName("Ngày cập nhật")]
        public DateTime DateUpdated { get; set; }

        [DisplayName("Ngày hoạt động")]
        public DateTime DateActivity { get; set; }

        [DisplayName("Loại")]
        public int Type { get; set; }

        [DisplayName("Mã Code")]
        public string Code { get; set; }

        [Browsable(false)]
        public int State { get; set; }
    }

    [XmlRoot("UserList")]
    [XmlInclude(typeof(User))]
    public class UserList
    {
        [XmlArray("UserArray")]
        [XmlArrayItem("User")]
        public List<User> list = new List<User>();

        [XmlElement("Name")]
        public string Name { get; set; }

        public UserList() { }
        public UserList(string Name)
        {
            this.Name = Name;
        }
    }
}