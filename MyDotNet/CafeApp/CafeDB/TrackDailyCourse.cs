using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using MySql.Data.MySqlClient;

using CafeModel;

namespace CafeDB
{
    public class TrackDailyCourse : MySQLData
    {
        //TRUY XUẤT CƠ SỞ DỮ LIỆU
        public IList<CafeModel.TrackDailyCourse> getAll()
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_track_daily_course", this.Connection);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            this.close();

            var lstTag = dt.AsEnumerable().Select(row =>
                new CafeModel.TrackDailyCourse(
                    row.Field<long>("id"),
                    row.Field<long>("id_course"),
                    row.Field<string>("course_name"),                    
                    row.Field<DateTime>("date_time"),
                    row.Field<float>("count")
                )
            ).ToList();
            return lstTag;
        }

        public CafeModel.TrackDailyCourse get(int Id)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_track_daily_course WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Id);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            var Obj = new CafeModel.TrackDailyCourse(
                dt.Rows[0].Field<long>("id"),
                dt.Rows[0].Field<long>("id_course"),
                dt.Rows[0].Field<string>("course_name"),                    
                dt.Rows[0].Field<DateTime>("date_time"),
                dt.Rows[0].Field<float>("count")
            );
            this.close();

            return Obj;
        }

        //CẬP NHẬT CƠ SỞ DỮ LIỆU
        public void insert(CafeModel.TrackDailyCourse Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("INSERT INTO cafecoirieng_track_daily_course(id, id_course, course_name, date_time, count) VALUES(@id, @id_course, @course_name, @date_time, @count)", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@id_course", Obj.IdCourse);
            cmd.Parameters.AddWithValue("@course_name", Obj.CourseName);
            cmd.Parameters.AddWithValue("@date_time", Obj.DateTime);
            cmd.Parameters.AddWithValue("@count", Obj.Count);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void update(CafeModel.TrackDailyCourse Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("UPDATE cafecoirieng_track_daily_course SET id=@id, id_course=@id_course, course_name=@course_name, date_time=@date_time, count=@count  WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@id_course", Obj.IdCourse);
            cmd.Parameters.AddWithValue("@course_name", Obj.CourseName);
            cmd.Parameters.AddWithValue("@date_time", Obj.DateTime);
            cmd.Parameters.AddWithValue("@count", Obj.Count);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void delete(CafeModel.TrackDailyCourse Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("DELETE FROM  cafecoirieng_track_daily_course WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.ExecuteNonQuery();
            this.close();
        }
    }
}
