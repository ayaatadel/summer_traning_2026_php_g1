# Admin Dashboard

A front-end admin dashboard built with HTML, CSS, and JavaScript. Part of the **vibe_coding** training project — created with Cursor AI.

This is a static, client-side demo. All data lives in memory (no server or database). Refreshing the page resets changes except for the theme preference.

---

## Quick Start

1. Open `index.html` in any modern browser.
2. Use the sidebar to switch between sections.
3. Try adding/editing users and products via the modal forms.

**Windows (PowerShell):**

```powershell
Start-Process "d:\summer_traning_2026\php_g1_2026\vibe_coding\cursor\index.html"
```

No build step, npm install, or server required.

---

## Project Structure

```
cursor/
├── index.html    # Page layout, sidebar, sections, modal, toast
├── style.css     # Layout, theming, components, responsive rules
├── script.js     # Data, rendering, charts, CRUD, event handlers
└── README.md     # This file
```

---

## Features

### Overview
- Four stat cards (revenue, users, orders, conversion rate)
- Revenue line chart (Canvas) with 7 / 30 / 90 day periods
- Recent activity feed
- Export report button (shows toast notification)

### Users
- Table with name, email, role, status, join date
- Search by name or email
- Filter by status (active, inactive, pending)
- Add, edit, and delete users via modal

### Orders
- Order list with ID, customer, amount, status, date
- View order details in a modal
- Status badges: `completed`, `processing`, `cancelled`

### Products
- Product cards with emoji, price, and stock count
- Add, edit, and delete products via modal

### Analytics
- Progress bars for page views, bounce rate, session duration, signups

### Settings
- General form (site name, admin email, timezone)
- Notification toggles (email, order alerts, weekly reports)
- Theme preference saved to `localStorage`

### Global UI
- Light / dark theme toggle (persisted as `admin-theme`)
- Collapsible sidebar on mobile (≤768px)
- Toast notifications for user actions
- Reusable modal for forms and detail views

---

## File Reference

### `index.html`

| Element ID | Purpose |
|------------|---------|
| `sidebar` | Left navigation panel |
| `menu-toggle` / `sidebar-close` | Mobile sidebar open/close |
| `section-*` | Page sections (overview, users, orders, etc.) |
| `stats-grid` | Stat cards container |
| `revenue-chart` | Canvas for revenue graph |
| `activity-list` | Recent activity items |
| `users-tbody` | Users table body |
| `orders-tbody` | Orders table body |
| `products-grid` | Product cards grid |
| `analytics-grid` | Analytics metric cards |
| `modal-overlay` | Modal backdrop and dialog |
| `toast` | Bottom-right notification |

Navigation items use `data-section` attributes that map to section IDs (e.g. `data-section="users"` → `#section-users`).

### `style.css`

Uses CSS custom properties for theming:

| Variable | Light | Dark |
|----------|-------|------|
| `--bg` | `#f0f4ff` | `#0b1120` |
| `--card` | `#ffffff` | `#1e293b` |
| `--text` | `#0f172a` | `#f1f5f9` |
| `--accent` | `#5b8def` | `#5b8def` |

Dark mode is applied via `[data-theme="dark"]` on `<html>`.

Key layout classes:
- `.dashboard` — flex container (sidebar + main)
- `.sidebar` — fixed 260px left panel
- `.main-wrapper` — content area with topbar
- `.page-section` — one section visible at a time (`.active`)
- `.stat-card`, `.card`, `.product-card` — content blocks

Breakpoints:
- **1024px** — chart/activity stack vertically
- **768px** — sidebar hidden off-screen, hamburger menu shown

### `script.js`

#### Sample Data

```javascript
stats          // Overview stat cards (read-only)
users          // Mutable — CRUD supported
orders         // Read-only list
products       // Mutable — CRUD supported
activities     // Read-only feed
analyticsMetrics // Read-only progress data
chartData      // Revenue values keyed by day count (7, 30, 90)
```

#### User object

```javascript
{
  id: 1,
  name: "Sarah Johnson",
  email: "sarah@example.com",
  role: "Admin",      // Admin | Editor | Viewer
  status: "active",   // active | inactive | pending
  joined: "Jan 12, 2026"
}
```

#### Product object

```javascript
{
  id: 1,
  name: "Wireless Headphones",
  price: 79.99,
  stock: 142,
  emoji: "🎧"
}
```

#### Key Functions

| Function | Description |
|----------|-------------|
| `renderStats()` | Builds stat cards from `stats` array |
| `renderActivity()` | Builds activity list |
| `renderUsers(filter, statusFilter)` | Filters and renders users table |
| `renderOrders()` | Renders orders table |
| `renderProducts()` | Renders product cards |
| `renderAnalytics()` | Renders analytics progress cards |
| `drawChart(days)` | Draws revenue line chart on canvas |
| `switchSection(sectionId)` | Shows one page section, updates nav |
| `openModal(title, bodyHtml)` | Opens modal with custom HTML |
| `closeModal()` | Closes modal |
| `showToast(message)` | Shows 3-second toast notification |
| `setTheme(theme)` | Applies light/dark theme, saves to localStorage |
| `editUser(id)` / `deleteUser(id)` | User CRUD (global for inline onclick) |
| `editProduct(id)` / `deleteProduct(id)` | Product CRUD |
| `viewOrder(orderId)` | Shows order detail modal |

---

## Customization

### Change accent color

In `style.css`, update:

```css
:root {
  --accent: #5b8def;
  --accent-dark: #336fd7;
}
```

### Add a sidebar section

1. Add a nav link in `index.html`:

```html
<a href="#" class="nav-item" data-section="reports">
  <span class="nav-icon">📋</span>
  <span>Reports</span>
</a>
```

2. Add a matching section:

```html
<section class="page-section" id="section-reports">
  <div class="page-header">
    <h1>Reports</h1>
  </div>
  <!-- content here -->
</section>
```

3. Navigation is handled automatically by `switchSection()` via `data-section`.

### Connect to a real backend

Replace in-memory arrays with `fetch()` calls:

```javascript
async function loadUsers() {
  const res = await fetch("/api/users");
  users = await res.json();
  renderUsers();
}
```

Persist theme and settings the same way — they already use `localStorage`.

---

## Browser Support

Works in modern browsers that support:
- CSS Grid and Flexbox
- CSS custom properties
- Canvas 2D API
- `localStorage`
- ES6+ JavaScript (arrow functions, template literals, `const`/`let`)

Tested by opening the file directly (`file://`). For API integration later, serve via a local dev server.

---

## Limitations

- Data resets on page refresh (except theme)
- No authentication or authorization
- Chart uses hard-coded sample numbers
- Search in the top bar shows a toast only (no global search yet)
- Settings form does not persist values

---

## Related Projects

| Folder | Description |
|--------|-------------|
| `vibe_coding/copilot/` | Todo app (GitHub Copilot demo) |
| `vibe_coding/cursor/` | This admin dashboard (Cursor demo) |
| `vibe_coding/lecNote.txt` | Training notes for Copilot and Cursor |

---

## License

Educational project for summer training 2026.
