using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Windows.Forms;

namespace CafeCoiRieng
{
    public partial class frmLogin : Form
    {
        public frmLogin()
        {
            InitializeComponent();
        }

        private void btnSave_Click(object sender, EventArgs e)
        {
            var UserAll = Global.mUser.getAll();
            foreach (var User in UserAll)
            {
                if (User.Email == txtUser.Text && User.Password == txtPassword.Text)
                {
                    Global.User = User;
                    break;
                }
            }
            this.Close();           
        }
    }
}
