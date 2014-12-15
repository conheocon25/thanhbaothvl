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
    public partial class frmMain : Form
    {
        frmLogin fLogin = new frmLogin();
        public frmMain()
        {
            InitializeComponent();
        }

        private void frmMain_Load(object sender, EventArgs e)
        {
            /* khởi tạo file DB từ Mysql to XML file
            Global.mCategory.Gateway.DB2XML();
            Global.mCourse.Gateway.DB2XML();
            Global.mDomain.Gateway.DB2XML();
            Global.mTable.Gateway.DB2XML();
            Global.mEmployee.Gateway.DB2XML();
            Global.mCustomer.Gateway.DB2XML();
            Global.mUnit.Gateway.DB2XML();
            Global.mUser.Gateway.DB2XML();
            Global.mSession.Gateway.DB2XML();
            Global.mSessionDetail.Gateway.DB2XML();

            Global.mTrackDaily.Gateway.DB2XML();
            Global.mTrackDailyCourse.Gateway.DB2XML();
            Global.mTrackDailyDomain.Gateway.DB2XML();
             * 
            MessageBox.Show("Đồng bộ hóa từ Server về máy tính xong rồi. Hệ thống tự động tắt để cập nhật lại dữ liệu !");
            System.Windows.Forms.Application.Exit();
            */
            fLogin.ShowDialog();
            if (Global.User == null)
            {
                System.Windows.Forms.Application.Exit();
            }

            mnuUser.Text = "[ " + Global.User.Name + "] đã đăng nhập ...";

            //QUYỀN BÁN HÀNG
            if (Global.User.Type == 2)
            {
                mnuAction.Visible = true;
                mnuImport.Visible = true;
                mnuReport.Visible = false;
                mnuSetting.Visible = false;
                mnuSync.Visible = false;
            }
            //QUYỀN QUẢN TRỊ
            else if (Global.User.Type == 4)
            {
                mnuAction.Visible = true;
                mnuImport.Visible = true;
                mnuReport.Visible = true;
                mnuSetting.Visible = true;
                mnuSync.Visible = true;
            }
        }

        private void mnuUser_Click(object sender, EventArgs e)
        {
            var Result = MessageBox.Show("Bạn muốn thoát ra khỏi hệ thống ?", "Thông báo", MessageBoxButtons.YesNo);
            if (Result == System.Windows.Forms.DialogResult.Yes)
            {
                Global.User = null;
                this.Close();
            }   
        }

        private void khởiTạoDB2XMLToolStripMenuItem_Click(object sender, EventArgs e)
        {
            
            
           
        }

        private void mnuSettingCategory_Click(object sender, EventArgs e)
        {
            frmSettingCategory F = new frmSettingCategory();
            F.MdiParent = this;
            F.Show();
        }

        private void mnuSettingCourse_Click(object sender, EventArgs e)
        {
            frmSettingCourse F = new frmSettingCourse();            
            F.MdiParent = this;
            F.Show();
            
        }

        private void mnuSettingUnit_Click(object sender, EventArgs e)
        {
            frmSettingUnit F = new frmSettingUnit();
            F.MdiParent = this;
            F.Show();
        }

        private void mnuSettingCustomer_Click(object sender, EventArgs e)
        {
            frmSettingCustomer F = new frmSettingCustomer();
            F.MdiParent = this;
            F.Show();
        }

        private void mnuSettingEmployee_Click(object sender, EventArgs e)
        {
            frmSettingEmployee F = new frmSettingEmployee();
            F.MdiParent = this;
            F.Show();
        }

        private void mnuSettingDomain_Click(object sender, EventArgs e)
        {
            frmSettingDomain F = new frmSettingDomain();
            F.MdiParent = this;
            F.Show();
        }

        private void mnuSettingTable_Click(object sender, EventArgs e)
        {
            frmSettingTable F = new frmSettingTable();
            F.MdiParent = this;
            F.Show();
        }

        private void mnuSettingUser_Click(object sender, EventArgs e)
        {
            frmSettingUser F = new frmSettingUser();
            F.MdiParent = this;
            F.Show();
        }

        private void mnuSettingOption_Click(object sender, EventArgs e)
        {

        }

        private void mnuData_Click(object sender, EventArgs e)
        {

        }

        private void mnuSelling_Click(object sender, EventArgs e)
        {
            frmSelling F = new frmSelling();
            F.MdiParent = this;
            F.Show();
        }

        private void mnuImport_Click(object sender, EventArgs e)
        {

        }

        private void mnuSheduling_Click(object sender, EventArgs e)
        {

        }

        private void mnuReportToday_Click(object sender, EventArgs e)
        {
            frmReportDaily F = new frmReportDaily();
            F.MdiParent = this;
            F.Show();
        }
    }
}
