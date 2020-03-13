# Laravel 6.x 开发P2P贷款平台

# 环境搭建
- windows系统：下载XAMPP/WAMP等集成环境即可。
- Linux/Mac系统：Apache/Nginx + MySQL/MariaDB + PHP7

# 相关配置
1. 在mysql中输入：create database dddai;
2. 项目文件：复制一份.env.example文件，将文件名改为.env 后更改mysql的账号密码等
3. 在项目文件下，终端输入以下命令：
    - composer install
    - php artisan migrate
    - php artisan key:generate
4. 配置好虚拟主机vhost,本地域名

# URI说明
domain.com/grow —— 生成收益还款账单

# 数据表说明
users —— 用户表  

projects —— 借款项目表  
atts —— 审核借款表  
hks —— 借款人还款表(amount 单位/分)  

bids —— 投资表(money 单位/分)  
tasks —— 投资人预期收益表  
grows —— 投资人收益表(amount 单位/元/日)  