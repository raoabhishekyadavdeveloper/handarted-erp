<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP System</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            width: 100%;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Header Section */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 2px solid #f0f0f0;
            flex-wrap: wrap;
            gap: 15px;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
        }

        .logo h1 {
            font-size: 28px;
            color: #2d3748;
            font-weight: 700;
        }

        .logo span {
            color: #667eea;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-info span {
            color: #4a5568;
            font-weight: 500;
        }

        .user-avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 18px;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .stat-label {
            font-size: 14px;
            color: #718096;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .stat-value {
            font-size: 32px;
            font-weight: 700;
            color: #2d3748;
            margin-top: 8px;
        }

        .stat-icon {
            float: right;
            font-size: 28px;
            opacity: 0.3;
        }

        /* Dashboard Grid */
        .dashboard-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 40px;
        }

        @media (max-width: 768px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }

        .card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
        }

        .card-title {
            font-size: 18px;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 20px;
        }

        /* Activity List */
        .activity-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 12px 0;
            border-bottom: 1px solid #f7fafc;
        }

        .activity-item:last-child {
            border-bottom: none;
        }

        .activity-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #667eea;
            flex-shrink: 0;
        }

        .activity-dot.green {
            background: #48bb78;
        }

        .activity-dot.orange {
            background: #ed8936;
        }

        .activity-dot.red {
            background: #fc8181;
        }

        .activity-content {
            flex: 1;
        }

        .activity-text {
            color: #2d3748;
            font-weight: 500;
        }

        .activity-time {
            color: #a0aec0;
            font-size: 12px;
        }

        /* Quick Actions */
        .quick-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
        }

        .action-btn {
            padding: 12px;
            background: #f7fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s;
            text-decoration: none;
            color: #2d3748;
            font-weight: 500;
            font-size: 14px;
        }

        .action-btn:hover {
            background: #667eea;
            color: white;
            border-color: #667eea;
            transform: scale(1.02);
        }

        .action-btn .icon {
            display: block;
            font-size: 24px;
            margin-bottom: 5px;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding-top: 30px;
            border-top: 2px solid #f0f0f0;
            color: #718096;
            font-size: 14px;
        }

        .footer a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Login Button */
        .login-btn {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
            text-decoration: none;
            display: inline-block;
        }

        .login-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <div class="logo">
                <div class="logo-icon">E</div>
                <h1>ERP <span>System</span></h1>
            </div>
            <div class="user-info">
                <span>Welcome, Admin</span>
                <div class="user-avatar">A</div>
                <a href="#" class="login-btn">Login</a>
            </div>
        </div>

        <!-- Stats -->
        <div class="stats-grid">
            <div class="stat-card">
                <span class="stat-icon">📊</span>
                <div class="stat-label">Total Users</div>
                <div class="stat-value">1,284</div>
            </div>
            <div class="stat-card">
                <span class="stat-icon">💰</span>
                <div class="stat-label">Revenue</div>
                <div class="stat-value">$85.2K</div>
            </div>
            <div class="stat-card">
                <span class="stat-icon">📦</span>
                <div class="stat-label">Orders</div>
                <div class="stat-value">342</div>
            </div>
            <div class="stat-card">
                <span class="stat-icon">⭐</span>
                <div class="stat-label">Products</div>
                <div class="stat-value">1,503</div>
            </div>
        </div>

        <!-- Dashboard Grid -->
        <div class="dashboard-grid">
            <!-- Recent Activity -->
            <div class="card">
                <div class="card-title">📋 Recent Activity</div>
                <div class="activity-item">
                    <div class="activity-dot green"></div>
                    <div class="activity-content">
                        <div class="activity-text">New user registered</div>
                        <div class="activity-time">2 minutes ago</div>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-dot orange"></div>
                    <div class="activity-content">
                        <div class="activity-text">Invoice #1024 generated</div>
                        <div class="activity-time">1 hour ago</div>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-dot blue"></div>
                    <div class="activity-content">
                        <div class="activity-text">Product inventory updated</div>
                        <div class="activity-time">3 hours ago</div>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-dot red"></div>
                    <div class="activity-content">
                        <div class="activity-text">Payment failed for order #203</div>
                        <div class="activity-time">5 hours ago</div>
                    </div>
                </div>
                <div class="activity-item">
                    <div class="activity-dot green"></div>
                    <div class="activity-content">
                        <div class="activity-text">New support ticket opened</div>
                        <div class="activity-time">8 hours ago</div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="card">
                <div class="card-title">⚡ Quick Actions</div>
                <div class="quick-actions">
                    <a href="#" class="action-btn">
                        <span class="icon">➕</span>
                        New User
                    </a>
                    <a href="#" class="action-btn">
                        <span class="icon">📄</span>
                        Generate Report
                    </a>
                    <a href="#" class="action-btn">
                        <span class="icon">📦</span>
                        Add Product
                    </a>
                    <a href="#" class="action-btn">
                        <span class="icon">💳</span>
                        New Invoice
                    </a>
                    <a href="#" class="action-btn">
                        <span class="icon">📊</span>
                        View Dashboard
                    </a>
                    <a href="#" class="action-btn">
                        <span class="icon">⚙️</span>
                        Settings
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>© 2026 <a href="#">Handcrafted ERP</a> — Built with ❤️ using Laravel</p>
        </div>
    </div>
</body>
</html>