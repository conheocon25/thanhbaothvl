namespace CafeCoiRieng
{
    partial class frmMain
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            System.ComponentModel.ComponentResourceManager resources = new System.ComponentModel.ComponentResourceManager(typeof(frmMain));
            this.mnuSystem = new System.Windows.Forms.MenuStrip();
            this.mnuAction = new System.Windows.Forms.ToolStripMenuItem();
            this.mnuSelling = new System.Windows.Forms.ToolStripMenuItem();
            this.mnuImport = new System.Windows.Forms.ToolStripMenuItem();
            this.mnuSheduling = new System.Windows.Forms.ToolStripMenuItem();
            this.mnuSetting = new System.Windows.Forms.ToolStripMenuItem();
            this.mnuSettingUnit = new System.Windows.Forms.ToolStripMenuItem();
            this.mnuSettingCustomer = new System.Windows.Forms.ToolStripMenuItem();
            this.mnuSettingEmployee = new System.Windows.Forms.ToolStripMenuItem();
            this.toolStripSeparator3 = new System.Windows.Forms.ToolStripSeparator();
            this.mnuSettingDomain = new System.Windows.Forms.ToolStripMenuItem();
            this.mnuSettingTable = new System.Windows.Forms.ToolStripMenuItem();
            this.toolStripSeparator1 = new System.Windows.Forms.ToolStripSeparator();
            this.mnuSettingCategory = new System.Windows.Forms.ToolStripMenuItem();
            this.mnuSettingCourse = new System.Windows.Forms.ToolStripMenuItem();
            this.toolStripSeparator2 = new System.Windows.Forms.ToolStripSeparator();
            this.mnuSettingUser = new System.Windows.Forms.ToolStripMenuItem();
            this.mnuSettingOption = new System.Windows.Forms.ToolStripMenuItem();
            this.mnuReport = new System.Windows.Forms.ToolStripMenuItem();
            this.mnuReportToday = new System.Windows.Forms.ToolStripMenuItem();
            this.thángToolStripMenuItem = new System.Windows.Forms.ToolStripMenuItem();
            this.mnuSync = new System.Windows.Forms.ToolStripMenuItem();
            this.mnuData = new System.Windows.Forms.ToolStripMenuItem();
            this.toolStripSeparator4 = new System.Windows.Forms.ToolStripSeparator();
            this.mnuUser = new System.Windows.Forms.ToolStripMenuItem();
            this.mnuSystem.SuspendLayout();
            this.SuspendLayout();
            // 
            // mnuSystem
            // 
            this.mnuSystem.Font = new System.Drawing.Font("Times New Roman", 12F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.mnuSystem.Items.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.mnuAction,
            this.mnuSetting,
            this.mnuReport,
            this.mnuSync,
            this.mnuUser});
            this.mnuSystem.LayoutStyle = System.Windows.Forms.ToolStripLayoutStyle.HorizontalStackWithOverflow;
            this.mnuSystem.Location = new System.Drawing.Point(0, 0);
            this.mnuSystem.Name = "mnuSystem";
            this.mnuSystem.Size = new System.Drawing.Size(848, 27);
            this.mnuSystem.TabIndex = 1;
            this.mnuSystem.Text = "menuStrip1";
            // 
            // mnuAction
            // 
            this.mnuAction.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.mnuSelling,
            this.mnuImport,
            this.mnuSheduling});
            this.mnuAction.Name = "mnuAction";
            this.mnuAction.Size = new System.Drawing.Size(68, 23);
            this.mnuAction.Text = "Quán lý";
            // 
            // mnuSelling
            // 
            this.mnuSelling.Name = "mnuSelling";
            this.mnuSelling.Size = new System.Drawing.Size(147, 24);
            this.mnuSelling.Text = "Bán hàng";
            this.mnuSelling.Click += new System.EventHandler(this.mnuSelling_Click);
            // 
            // mnuImport
            // 
            this.mnuImport.Name = "mnuImport";
            this.mnuImport.Size = new System.Drawing.Size(147, 24);
            this.mnuImport.Text = "Nhập hàng";
            this.mnuImport.Click += new System.EventHandler(this.mnuImport_Click);
            // 
            // mnuSheduling
            // 
            this.mnuSheduling.Name = "mnuSheduling";
            this.mnuSheduling.Size = new System.Drawing.Size(147, 24);
            this.mnuSheduling.Text = "Chấm công";
            this.mnuSheduling.Click += new System.EventHandler(this.mnuSheduling_Click);
            // 
            // mnuSetting
            // 
            this.mnuSetting.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.mnuSettingUnit,
            this.mnuSettingCustomer,
            this.mnuSettingEmployee,
            this.toolStripSeparator3,
            this.mnuSettingDomain,
            this.mnuSettingTable,
            this.toolStripSeparator1,
            this.mnuSettingCategory,
            this.mnuSettingCourse,
            this.toolStripSeparator2,
            this.mnuSettingUser,
            this.mnuSettingOption});
            this.mnuSetting.Name = "mnuSetting";
            this.mnuSetting.Size = new System.Drawing.Size(73, 23);
            this.mnuSetting.Text = "Thiết lập";
            // 
            // mnuSettingUnit
            // 
            this.mnuSettingUnit.Name = "mnuSettingUnit";
            this.mnuSettingUnit.Size = new System.Drawing.Size(150, 24);
            this.mnuSettingUnit.Text = "Đơn vị tính";
            this.mnuSettingUnit.Click += new System.EventHandler(this.mnuSettingUnit_Click);
            // 
            // mnuSettingCustomer
            // 
            this.mnuSettingCustomer.Name = "mnuSettingCustomer";
            this.mnuSettingCustomer.Size = new System.Drawing.Size(150, 24);
            this.mnuSettingCustomer.Text = "Khách hàng";
            this.mnuSettingCustomer.Click += new System.EventHandler(this.mnuSettingCustomer_Click);
            // 
            // mnuSettingEmployee
            // 
            this.mnuSettingEmployee.Name = "mnuSettingEmployee";
            this.mnuSettingEmployee.Size = new System.Drawing.Size(150, 24);
            this.mnuSettingEmployee.Text = "Nhân viên";
            this.mnuSettingEmployee.Click += new System.EventHandler(this.mnuSettingEmployee_Click);
            // 
            // toolStripSeparator3
            // 
            this.toolStripSeparator3.Name = "toolStripSeparator3";
            this.toolStripSeparator3.Size = new System.Drawing.Size(147, 6);
            // 
            // mnuSettingDomain
            // 
            this.mnuSettingDomain.Name = "mnuSettingDomain";
            this.mnuSettingDomain.Size = new System.Drawing.Size(150, 24);
            this.mnuSettingDomain.Text = "Khu vực";
            this.mnuSettingDomain.Click += new System.EventHandler(this.mnuSettingDomain_Click);
            // 
            // mnuSettingTable
            // 
            this.mnuSettingTable.Name = "mnuSettingTable";
            this.mnuSettingTable.Size = new System.Drawing.Size(150, 24);
            this.mnuSettingTable.Text = "Bàn";
            this.mnuSettingTable.Click += new System.EventHandler(this.mnuSettingTable_Click);
            // 
            // toolStripSeparator1
            // 
            this.toolStripSeparator1.Name = "toolStripSeparator1";
            this.toolStripSeparator1.Size = new System.Drawing.Size(147, 6);
            // 
            // mnuSettingCategory
            // 
            this.mnuSettingCategory.Name = "mnuSettingCategory";
            this.mnuSettingCategory.Size = new System.Drawing.Size(150, 24);
            this.mnuSettingCategory.Text = "Danh mục";
            this.mnuSettingCategory.Click += new System.EventHandler(this.mnuSettingCategory_Click);
            // 
            // mnuSettingCourse
            // 
            this.mnuSettingCourse.Name = "mnuSettingCourse";
            this.mnuSettingCourse.Size = new System.Drawing.Size(150, 24);
            this.mnuSettingCourse.Text = "Món";
            this.mnuSettingCourse.Click += new System.EventHandler(this.mnuSettingCourse_Click);
            // 
            // toolStripSeparator2
            // 
            this.toolStripSeparator2.Name = "toolStripSeparator2";
            this.toolStripSeparator2.Size = new System.Drawing.Size(147, 6);
            // 
            // mnuSettingUser
            // 
            this.mnuSettingUser.Name = "mnuSettingUser";
            this.mnuSettingUser.Size = new System.Drawing.Size(150, 24);
            this.mnuSettingUser.Text = "Người dùng";
            this.mnuSettingUser.Click += new System.EventHandler(this.mnuSettingUser_Click);
            // 
            // mnuSettingOption
            // 
            this.mnuSettingOption.Name = "mnuSettingOption";
            this.mnuSettingOption.Size = new System.Drawing.Size(150, 24);
            this.mnuSettingOption.Text = "Tùy chọn";
            this.mnuSettingOption.Click += new System.EventHandler(this.mnuSettingOption_Click);
            // 
            // mnuReport
            // 
            this.mnuReport.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.mnuReportToday,
            this.thángToolStripMenuItem});
            this.mnuReport.Name = "mnuReport";
            this.mnuReport.Size = new System.Drawing.Size(72, 23);
            this.mnuReport.Text = "Báo cáo";
            // 
            // mnuReportToday
            // 
            this.mnuReportToday.Name = "mnuReportToday";
            this.mnuReportToday.Size = new System.Drawing.Size(152, 24);
            this.mnuReportToday.Text = "theo Ngày";
            this.mnuReportToday.Click += new System.EventHandler(this.mnuReportToday_Click);
            // 
            // thángToolStripMenuItem
            // 
            this.thángToolStripMenuItem.Name = "thángToolStripMenuItem";
            this.thángToolStripMenuItem.Size = new System.Drawing.Size(152, 24);
            this.thángToolStripMenuItem.Text = "theo Tháng";
            // 
            // mnuSync
            // 
            this.mnuSync.DropDownItems.AddRange(new System.Windows.Forms.ToolStripItem[] {
            this.mnuData,
            this.toolStripSeparator4});
            this.mnuSync.Name = "mnuSync";
            this.mnuSync.Size = new System.Drawing.Size(76, 23);
            this.mnuSync.Text = "Hệ thống";
            // 
            // mnuData
            // 
            this.mnuData.Name = "mnuData";
            this.mnuData.Size = new System.Drawing.Size(176, 24);
            this.mnuData.Text = "Đồng bộ dữ liệu";
            this.mnuData.Click += new System.EventHandler(this.mnuData_Click);
            // 
            // toolStripSeparator4
            // 
            this.toolStripSeparator4.Name = "toolStripSeparator4";
            this.toolStripSeparator4.Size = new System.Drawing.Size(173, 6);
            // 
            // mnuUser
            // 
            this.mnuUser.Name = "mnuUser";
            this.mnuUser.Size = new System.Drawing.Size(50, 23);
            this.mnuUser.Text = "User";
            this.mnuUser.Click += new System.EventHandler(this.mnuUser_Click);
            // 
            // frmMain
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(8F, 17F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.BackgroundImageLayout = System.Windows.Forms.ImageLayout.Stretch;
            this.ClientSize = new System.Drawing.Size(848, 638);
            this.Controls.Add(this.mnuSystem);
            this.Font = new System.Drawing.Font("Times New Roman", 11.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.Icon = ((System.Drawing.Icon)(resources.GetObject("$this.Icon")));
            this.IsMdiContainer = true;
            this.Margin = new System.Windows.Forms.Padding(4);
            this.Name = "frmMain";
            this.StartPosition = System.Windows.Forms.FormStartPosition.CenterScreen;
            this.Text = "Hệ Thống Quản Lý Cafe Cõi Riêng";
            this.WindowState = System.Windows.Forms.FormWindowState.Maximized;
            this.Load += new System.EventHandler(this.frmMain_Load);
            this.mnuSystem.ResumeLayout(false);
            this.mnuSystem.PerformLayout();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.MenuStrip mnuSystem;
        private System.Windows.Forms.ToolStripMenuItem mnuAction;
        private System.Windows.Forms.ToolStripMenuItem mnuSelling;
        private System.Windows.Forms.ToolStripMenuItem mnuImport;
        private System.Windows.Forms.ToolStripMenuItem mnuSheduling;
        private System.Windows.Forms.ToolStripMenuItem mnuSetting;
        private System.Windows.Forms.ToolStripMenuItem mnuSettingUnit;
        private System.Windows.Forms.ToolStripMenuItem mnuSettingCustomer;
        private System.Windows.Forms.ToolStripMenuItem mnuSettingEmployee;
        private System.Windows.Forms.ToolStripSeparator toolStripSeparator3;
        private System.Windows.Forms.ToolStripMenuItem mnuSettingDomain;
        private System.Windows.Forms.ToolStripMenuItem mnuSettingTable;
        private System.Windows.Forms.ToolStripSeparator toolStripSeparator1;
        private System.Windows.Forms.ToolStripMenuItem mnuSettingCategory;
        private System.Windows.Forms.ToolStripMenuItem mnuSettingCourse;
        private System.Windows.Forms.ToolStripSeparator toolStripSeparator2;
        private System.Windows.Forms.ToolStripMenuItem mnuSettingUser;
        private System.Windows.Forms.ToolStripMenuItem mnuSettingOption;
        private System.Windows.Forms.ToolStripMenuItem mnuReport;
        private System.Windows.Forms.ToolStripMenuItem mnuReportToday;
        private System.Windows.Forms.ToolStripMenuItem thángToolStripMenuItem;
        private System.Windows.Forms.ToolStripMenuItem mnuSync;
        private System.Windows.Forms.ToolStripMenuItem mnuData;
        private System.Windows.Forms.ToolStripSeparator toolStripSeparator4;
        private System.Windows.Forms.ToolStripMenuItem mnuUser;
    }
}

