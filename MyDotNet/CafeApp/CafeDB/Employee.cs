using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using MySql.Data.MySqlClient;

using CafeModel;

namespace CafeDB
{
    public class Employee : MySQLData
    {
        //TRUY XUẤT CƠ SỞ DỮ LIỆU
        public IList<CafeModel.Employee> getAll()
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_employee", this.Connection);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            this.close();

            IList<CafeModel.Employee> lstTag = dt.AsEnumerable().Select(row =>
                new CafeModel.Employee(
                        row.Field<long>("id"),
                        row.Field<string>("name"),
                        row.Field<string>("job"),
                        row.Field<int>("gender"),
                        row.Field<string>("phone"),
                        row.Field<string>("address"),
                        row.Field<long>("salary_base"),
                        row.Field<string>("card"),
                        0
                    )
            ).ToList();
            return lstTag;
        }

        public CafeModel.Employee get(int Id)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("SELECT * FROM cafecoirieng_employee WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Id);
            MySqlDataReader reader = cmd.ExecuteReader();
            DataTable dt = new DataTable();
            dt.Load(reader);
            CafeModel.Employee Tag = new CafeModel.Employee(
                dt.Rows[0].Field<long>("id"),
                dt.Rows[0].Field<string>("name"),
                dt.Rows[0].Field<string>("job"),
                dt.Rows[0].Field<int>("gender"),
                dt.Rows[0].Field<string>("phone"),
                dt.Rows[0].Field<string>("address"),
                dt.Rows[0].Field<long>("salary_base"),
                dt.Rows[0].Field<string>("card")
            );
            this.close();

            return Tag;
        }

        //CẬP NHẬT CƠ SỞ DỮ LIỆU
        public void insert(CafeModel.Employee Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("INSERT INTO cafecoirieng_employee(id, name, job, gender, phone, address, salary_base, card) VALUES(@id, @name, @job, @gender, @phone, @address, @salary_base, @card)", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.Parameters.AddWithValue("@job", Obj.Job);
            cmd.Parameters.AddWithValue("@gender", Obj.Gender);
            cmd.Parameters.AddWithValue("@phone", Obj.Phone);
            cmd.Parameters.AddWithValue("@address", Obj.Address);
            cmd.Parameters.AddWithValue("@salary_base", Obj.SalaryBase);
            cmd.Parameters.AddWithValue("@card", Obj.Card);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void update(CafeModel.Employee Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("UPDATE cafecoirieng_employee SET id=@id, name=@name, job=@job, gender=@gender, phone=@phone, address=@address, salary_base=@salary_base, card=@card WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.Parameters.AddWithValue("@name", Obj.Name);
            cmd.Parameters.AddWithValue("@job", Obj.Job);
            cmd.Parameters.AddWithValue("@gender", Obj.Gender);
            cmd.Parameters.AddWithValue("@phone", Obj.Phone);
            cmd.Parameters.AddWithValue("@address", Obj.Address);
            cmd.Parameters.AddWithValue("@salary_base", Obj.SalaryBase);
            cmd.Parameters.AddWithValue("@card", Obj.Card);
            cmd.ExecuteNonQuery();
            this.close();
        }

        public void delete(CafeModel.Employee Obj)
        {
            this.open();
            MySqlCommand cmd = new MySqlCommand("DELETE FROM  cafecoirieng_employee WHERE id=@id", this.Connection);
            cmd.Parameters.AddWithValue("@id", Obj.Id);
            cmd.ExecuteNonQuery();
            this.close();
        }
    }
}
