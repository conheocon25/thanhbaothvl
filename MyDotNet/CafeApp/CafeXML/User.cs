using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

using CafeModel;
using CafeGateway;

namespace CafeXML
{
    public class User
    {
        public UserList List;
        public CafeGateway.User Gateway;

        public User(bool bSync = true)
        {
            Gateway = new CafeGateway.User();
            if (bSync==true)
                List = Gateway.XML2List();

        }

        //TRUY XUẤT DỮ LIỆU
        public IList<CafeModel.User> getAll()
        {
            var ObjAll =
                from p in List.list
                where p.State != 3
                select p;

            return ObjAll.ToList();
        }

        public CafeModel.User get(long Id)
        {
            var User = List.list.FirstOrDefault(Obj => Obj.Id == Id);
            return User;
        }

        public void add(CafeModel.User User)
        {
            List.list.Add(User);
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }

        public void update(CafeModel.User User)
        {
            foreach (var P in List.list)
            {
                if (P.Id == User.Id)
                {
                    P.Name = User.Name;
                    P.Code = User.Code;
                    P.DateActivity = User.DateActivity;
                    P.DateCreated = User.DateCreated;
                    P.DateUpdated = User.DateUpdated;
                    P.Email = User.Email;
                    P.Gender = User.Gender;
                    P.Note = User.Note;
                    P.Password = User.Password;
                    P.Type = User.Type;

                    P.State = 2;
                }
            }
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }

        public void delete(long Id)
        {
            foreach (var P in List.list)
            {
                if (P.Id == Id) { P.State = 3; }
            }
            Gateway.List2XML(List);
            List = Gateway.XML2List();
        }
        //Hàm hỗ trợ SynC
        public int getCountChange()
        {
            var ObjAll = this.getAll();
            int Count = 0;

            foreach (var Obj in ObjAll)
            {
                if (Obj.State != 0)
                {
                    Count++;
                }
            }
            return Count;
        }
        public void restart()
        {
            List = Gateway.XML2List();
        }
    }
}
