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
    public class Category
    {
        XmlSerializer Serializer;
        const string FilePath = "data\\Category.xml";
        public Category()
        {
            Type[] CategoryTypes = { typeof(CafeModel.Category) };
            Serializer = new XmlSerializer(typeof(CafeModel.CategoryList), CategoryTypes);
        }

        public void DB2XML()
        {
            var mCategory = new CafeDB.Category();
            CategoryList lstCategory = new CafeModel.CategoryList("Danh mục");
            lstCategory.list = mCategory.getAll().ToList<CafeModel.Category>();

            using (StringWriter writer = new Utf8StringWriter())
            {
                Serializer.Serialize(writer, lstCategory);
                using (StreamWriter wrt = new StreamWriter(FilePath))
                {
                    wrt.Write(writer.ToString());
                }
            }

        }

        public void XML2DB()
        {
            var mCategory = new CafeDB.Category();
            var lstCategory = new CafeModel.CategoryList();
            using (StreamReader reader = new StreamReader(FilePath, Encoding.UTF8, true))
            {
                lstCategory = (CafeModel.CategoryList)Serializer.Deserialize(reader);
            }

            foreach (var Category in lstCategory.list)
            {
                int State = Category.State;
                //Thêm mới
                if (State == 1)
                {
                    mCategory.insert(Category);
                }
                //Cập nhật
                else if (State == 2)
                {
                    mCategory.update(Category);
                }
                //Xóa
                else if (State == 3)
                {
                    mCategory.delete(Category);
                }
            }

        }

        public CategoryList XML2List()
        {
            FileStream FileSystemOpen = new FileStream(FilePath, FileMode.Open);
            var CategoryList = (CafeModel.CategoryList)Serializer.Deserialize(FileSystemOpen);
            FileSystemOpen.Close();
            return CategoryList;
        }

        public void List2XML(CafeModel.CategoryList lstCategory)
        {
            FileStream FileSystemCreated = new FileStream(FilePath, FileMode.Create);
            Serializer.Serialize(FileSystemCreated, lstCategory);
            FileSystemCreated.Close();
        }
    }
}
