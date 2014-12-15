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
    public partial class frmSync : Form
    {
        public frmSync()
        {
            InitializeComponent();
        }

        private void frmSync_Load(object sender, EventArgs e)
        {
            //Tình trạng các phiếu
            int nSession1 = Global.mSession.getCountChange();
            int nSession2 = Global.mSession.getAll().Count;
            btnSession.Text = "( " + nSession1.ToString() + " / " + nSession2.ToString() + ") lưu";
            if (nSession1 == 0) btnSession.Enabled = false;

            int nSessionDetail1 = Global.mSessionDetail.getCountChange();
            int nSessionDetail2 = Global.mSessionDetail.getAll().Count;
            btnSessionDetail.Text = "( " + nSessionDetail1.ToString() + " / " + nSessionDetail2.ToString() + ") lưu";
            if (nSessionDetail1 == 0) btnSessionDetail.Enabled = false;

            //Tình trạng báo cáo
            //int nReport1 = Global.mTrackDaily.getCountChange();
           // int nReport2 = Global.mTrackDaily.getAll().Count;
            //btnReport.Text = "( " + nReport1.ToString() + " / " + nReport2.ToString() + ") lưu";
            //if (nReport1 == 0) btnReport.Enabled = false;

            //Tình trạng bàn và khu vực
            int nDomain1 = Global.mDomain.getCountChange();
            int nDomain2 = Global.mDomain.getAll().Count;
            btnDomain.Text = "( " + nDomain1.ToString() + " / " + nDomain2.ToString() + ") lưu";
            if (nDomain1 == 0) btnDomain.Enabled = false;

            int nTable1 = Global.mTable.getCountChange();
            int nTable2 = Global.mTable.getAll().Count;
            btnTable.Text = "( " + nTable1.ToString() + " / " + nTable2.ToString() + ") lưu";
            if (nTable1 == 0) btnTable.Enabled = false;

            //Tình trạng danh mục và món
            int nCategory1 = Global.mCategory.getCountChange();
            int nCategory2 = Global.mCategory.getAll().Count;
            btnCategory.Text = "( " + nCategory1.ToString() + " / " + nCategory2.ToString() + ") lưu";
            if (nCategory1 == 0) btnCategory.Enabled = false;

            int nCourse1 = Global.mCourse.getCountChange();
            int nCourse2 = Global.mCourse.getAll().Count;
            btnCourse.Text = "( " + nCourse1.ToString() + " / " + nCourse2.ToString() + ") lưu";
            if (nCourse1 == 0) btnCourse.Enabled = false;

            //Tình trạng khách hàng
            int nCustomer1 = Global.mCustomer.getCountChange();
            int nCustomer2 = Global.mCustomer.getAll().Count;
            btnCustomer.Text = "( " + nCustomer1.ToString() + " / " + nCustomer2.ToString() + ") lưu";
            if (nCustomer1 == 0) btnCustomer.Enabled = false;

            //Tình trạng nhân viên
            int nEmployee1 = Global.mEmployee.getCountChange();
            int nEmployee2 = Global.mEmployee.getAll().Count;
            btnEmployee.Text = "( " + nEmployee1.ToString() + " / " + nEmployee2.ToString() + ") lưu";
            if (nEmployee1 == 0) btnEmployee.Enabled = false;

            //Tình trạng người dùng
            int nUser1 = Global.mUser.getCountChange();
            int nUser2 = Global.mUser.getAll().Count;
            btnUser.Text = "( " + nUser1.ToString() + " / " + nUser2.ToString() + ") lưu";
            if (nUser1 == 0) btnUser.Enabled = false;

            //Tình trạng đơn vị tính
            int nUnit1 = Global.mUnit.getCountChange();
            int nUnit2 = Global.mUnit.getAll().Count;
            btnUnit.Text = "( " + nUnit1.ToString() + " / " + nUnit2.ToString() + ") lưu";
            if (nUnit1 == 0) btnUnit.Enabled = false;
        }

        private void btnSession_Click(object sender, EventArgs e)
        {
            this.Cursor = System.Windows.Forms.Cursors.WaitCursor;

            Global.mSession.Gateway.XML2DB();
            Global.mSession.Gateway.DB2XML();
            Global.mSession.restart();

            int nSession1 = Global.mSession.getCountChange();
            int nSession2 = Global.mSession.getAll().Count;
            btnSession.Text = "( " + nSession1.ToString() + " / " + nSession2.ToString() + ") lưu";
            if (nSession1 == 0) btnSession.Enabled = false;
        }

        private void btnSession1_Click(object sender, EventArgs e)
        {
            this.Cursor = System.Windows.Forms.Cursors.WaitCursor;

            Global.mSession.Gateway.DB2XML();
            Global.mSession.restart();

            int nSession1 = Global.mSession.getCountChange();
            int nSession2 = Global.mSession.getAll().Count;
            btnSession.Text = "( " + nSession1.ToString() + " / " + nSession2.ToString() + ") lưu";
            if (nSession1 == 0) btnSession.Enabled = false;

            this.Cursor = System.Windows.Forms.Cursors.Default;
        }

        private void btnSessionDetail_Click(object sender, EventArgs e)
        {
            this.Cursor = System.Windows.Forms.Cursors.WaitCursor;

            Global.mSessionDetail.Gateway.XML2DB();
            Global.mSessionDetail.Gateway.DB2XML();
            Global.mSessionDetail.restart();

            int nSessionDetail1 = Global.mSessionDetail.getCountChange();
            int nSessionDetail2 = Global.mSessionDetail.getAll().Count;
            btnSessionDetail.Text = "( " + nSessionDetail1.ToString() + " / " + nSessionDetail2.ToString() + ") lưu";
            if (nSessionDetail1 == 0) btnSessionDetail.Enabled = false;

            this.Cursor = System.Windows.Forms.Cursors.Default;
        }

        private void btnSessionDetail1_Click(object sender, EventArgs e)
        {
            this.Cursor = System.Windows.Forms.Cursors.WaitCursor;

            Global.mSessionDetail.Gateway.DB2XML();
            Global.mSessionDetail.restart();

            int nSessionDetail1 = Global.mSessionDetail.getCountChange();
            int nSessionDetail2 = Global.mSessionDetail.getAll().Count;
            btnSessionDetail.Text = "( " + nSessionDetail1.ToString() + " / " + nSessionDetail2.ToString() + ") lưu";
            if (nSessionDetail1 == 0) btnSessionDetail.Enabled = false;

            this.Cursor = System.Windows.Forms.Cursors.Default;
        }

        private void btnReport_Click(object sender, EventArgs e)
        {
            /*
            this.Cursor = System.Windows.Forms.Cursors.WaitCursor;
            Global.mTrackDaily.Gateway.XML2DB();
            Global.mTrackDaily.Gateway.DB2XML();
            Global.mTrackDaily.restart();

            //Tình trạng báo cáo
            int nReport1 = Global.mTrackDaily.getCountChange();
            int nReport2 = Global.mTrackDaily.getAll().Count;
            btnReport.Text = "( " + nReport1.ToString() + " / " + nReport2.ToString() + ") lưu";
            if (nReport1 == 0) btnReport.Enabled = false;

            this.Cursor = System.Windows.Forms.Cursors.Default;
            */
        }

        private void btnReport1_Click(object sender, EventArgs e)
        {

        }

        private void btnDomain_Click(object sender, EventArgs e)
        {

        }
    }
}
