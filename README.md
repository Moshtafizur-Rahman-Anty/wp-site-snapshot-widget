# 📊 WP Site Snapshot

> A custom WordPress admin dashboard widget demonstrating strict PHP 8.0+ OOP architecture and MVC separation of concerns.

[![Watch the Video: Part One](https://img.shields.io/badge/YouTube-Watch_How_I_Built_This:_Part_One-FF0000?style=for-the-badge&logo=youtube&logoColor=white)](https://www.youtube.com/watch?v=U96XBzlxPuY)

[![Watch the Video: Part Two](https://img.shields.io/badge/YouTube-Watch_How_I_Built_This:_Part_Two-FF0000?style=for-the-badge&logo=youtube&logoColor=white)](https://www.youtube.com/watch?v=GnpwGYptdmU&t)

## 🏗️ Development Approach
When building this traditional backend plugin, I avoided legacy procedural PHP to ensure enterprise-level scalability and security:

* **Object-Oriented Programming (OOP):** The entire plugin logic is encapsulated inside a strict PHP class. This prevents global namespace collisions and ensures compatibility with other plugins.
* **Separation of Concerns (MVC):** Instead of mixing complex HTML output inside the PHP logic class, I separated the frontend markup into a dedicated `views/` folder. The class safely `includes` the view, making the codebase highly maintainable.
* **Safe Boot Sequence:** The class is instantiated inside the `plugins_loaded` hook. This guarantees all core WordPress functions are fully loaded before the plugin executes.
* **Core API Usage:** Implemented native `wp_add_dashboard_widget()` via the `wp_dashboard_setup` hook to safely pull and display live site statistics (posts, comments, and recent publications).

## 🛠️ Tech Stack & APIs Used
* **PHP 7.4+ / 8.0+** (Strict OOP)
* **WordPress Core Hooks API**
* **Dashboard Widgets API**

## 🚀 Installation & Testing
1. Download the `.zip` file from the releases or clone this repository.
2. Upload to the `/wp-content/plugins/` directory of your local WordPress environment.
3. Activate the plugin through the WordPress admin dashboard.
4. Navigate to the main Dashboard to see the site snapshot widget.

---
### 👨‍💻 About the Developer
**Moshtafizur Rahman**  
WordPress & WooCommerce Developer | Remote European Experience  
🌐 [View my full portfolio](https://gutenberg.yourname.dev) | 💼 [Upwork Profile](https://upwork.com/fl/moshtafizur) | 🔗 [LinkedIn](https://linkedin.com/in/moshtafizur)