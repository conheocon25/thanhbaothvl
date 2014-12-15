using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Data;
using System.IO;
using System.Text;
using System.Xml;
using System.Xml.Serialization;

using CafeModel;
using CafeDB;

namespace CafeGateway
{
    public class Course
    {
        XmlSerializer Serializer;
        const string FilePath = "data\\Course.xml";
        public Course()
        {
            Type[] CourseTypes = { typeof(CafeModel.Course) };
            Serializer = new XmlSerializer(typeof(CafeModel.CourseList), CourseTypes);
        }

        public void DB2XML()
        {
            var mCourse = new CafeDB.Course();
            var lstCourse = new CafeModel.CourseList("Món ăn");
            lstCourse.list = mCourse.getAll().ToList<CafeModel.Course>();

            using (StringWriter writer = new Utf8StringWriter())
            {
                Serializer.Serialize(writer, lstCourse);
                using (StreamWriter wrt = new StreamWriter(FilePath))
                {
                    wrt.Write(writer.ToString());
                }
            }

        }

        public void XML2DB()
        {
            var mCourse = new CafeDB.Course();
            var lstCourse = new CafeModel.CourseList();
            using (StreamReader reader = new StreamReader(FilePath, Encoding.UTF8, true))
            {
                lstCourse = (CafeModel.CourseList)Serializer.Deserialize(reader);
            }

            foreach (var Course in lstCourse.list)
            {
                int State = Course.State;
                //Thêm mới
                if (State == 1)
                {
                    mCourse.insert(Course);
                }
                //Cập nhật
                else if (State == 2)
                {
                    mCourse.update(Course);
                }
                //Xóa
                else if (State == 3)
                {
                    mCourse.delete(Course);
                }
            }

        }

        public CafeModel.CourseList XML2List()
        {
            FileStream FileSystemOpen = new FileStream(FilePath, FileMode.Open);
            var CourseList = (CourseList)Serializer.Deserialize(FileSystemOpen);
            FileSystemOpen.Close();
            return CourseList;
        }

        public void List2XML(CafeModel.CourseList lstCourse)
        {
            FileStream FileSystemCreated = new FileStream(FilePath, FileMode.Create);
            Serializer.Serialize(FileSystemCreated, lstCourse);
            FileSystemCreated.Close();
        }
    }
}
