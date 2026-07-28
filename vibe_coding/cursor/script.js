// Admin Dashboard — data, navigation, charts, and interactions

// ── Sample Data ──────────────────────────────────────────────
const stats = [
  { label: "Total Revenue", value: "$48,295", change: "+12.5%", up: true, icon: "💰", color: "blue" },
  { label: "Total Users", value: "2,847", change: "+8.2%", up: true, icon: "👥", color: "green" },
  { label: "Orders", value: "1,429", change: "-3.1%", up: false, icon: "📦", color: "orange" },
  { label: "Conversion Rate", value: "3.24%", change: "+0.8%", up: true, icon: "📈", color: "purple" },
];

let users = [
  { id: 1, name: "Sarah Johnson", email: "sarah@example.com", role: "Admin", status: "active", joined: "Jan 12, 2026" },
  { id: 2, name: "Mike Chen", email: "mike@example.com", role: "Editor", status: "active", joined: "Feb 3, 2026" },
  { id: 3, name: "Emily Davis", email: "emily@example.com", role: "Viewer", status: "inactive", joined: "Mar 18, 2026" },
  { id: 4, name: "James Wilson", email: "james@example.com", role: "Editor", status: "active", joined: "Apr 5, 2026" },
  { id: 5, name: "Lisa Park", email: "lisa@example.com", role: "Viewer", status: "pending", joined: "May 22, 2026" },
  { id: 6, name: "David Brown", email: "david@example.com", role: "Admin", status: "active", joined: "Jun 8, 2026" },
];

const orders = [
  { id: "#ORD-1042", customer: "Sarah Johnson", amount: "$249.00", status: "completed", date: "Jul 27, 2026" },
  { id: "#ORD-1041", customer: "Mike Chen", amount: "$89.50", status: "processing", date: "Jul 27, 2026" },
  { id: "#ORD-1040", customer: "Emily Davis", amount: "$512.00", status: "completed", date: "Jul 26, 2026" },
  { id: "#ORD-1039", customer: "James Wilson", amount: "$34.99", status: "cancelled", date: "Jul 26, 2026" },
  { id: "#ORD-1038", customer: "Lisa Park", amount: "$178.00", status: "processing", date: "Jul 25, 2026" },
  { id: "#ORD-1037", customer: "David Brown", amount: "$99.00", status: "completed", date: "Jul 25, 2026" },
];

let products = [
  { id: 1, name: "Wireless Headphones", price: 79.99, stock: 142, emoji: "🎧" },
  { id: 2, name: "Smart Watch", price: 199.99, stock: 58, emoji: "⌚" },
  { id: 3, name: "Laptop Stand", price: 49.99, stock: 230, emoji: "💻" },
  { id: 4, name: "USB-C Hub", price: 34.99, stock: 89, emoji: "🔌" },
  { id: 5, name: "Mechanical Keyboard", price: 129.99, stock: 45, emoji: "⌨️" },
  { id: 6, name: "Webcam HD", price: 59.99, stock: 112, emoji: "📷" },
];

const activities = [
  { type: "order", text: "New order #ORD-1042 placed by Sarah Johnson", time: "5 min ago" },
  { type: "user", text: "Lisa Park registered a new account", time: "23 min ago" },
  { type: "alert", text: "Low stock alert: Mechanical Keyboard (45 left)", time: "1 hour ago" },
  { type: "order", text: "Order #ORD-1039 was cancelled", time: "2 hours ago" },
  { type: "user", text: "Mike Chen updated profile settings", time: "3 hours ago" },
  { type: "order", text: "Order #ORD-1037 marked as completed", time: "5 hours ago" },
];

const analyticsMetrics = [
  { label: "Page Views", value: "124,583", percent: 78, color: "#5b8def" },
  { label: "Bounce Rate", value: "32.4%", percent: 32, color: "#f59e0b" },
  { label: "Avg. Session", value: "4m 32s", percent: 65, color: "#10b981" },
  { label: "New Signups", value: "847", percent: 54, color: "#8b5cf6" },
];

const chartData = {
  7: [4200, 5100, 4800, 6200, 5800, 7100, 6800],
  30: [3200, 4100, 3800, 5200, 4800, 6100, 5800, 7200, 6900, 8100],
  90: [2800, 3500, 4200, 5100, 4800, 6200, 5800, 7100, 6800, 8200, 7900, 9100],
};

// ── DOM References ─────────────────────────────────────────
const sidebar = document.getElementById("sidebar");
const menuToggle = document.getElementById("menu-toggle");
const sidebarClose = document.getElementById("sidebar-close");
const navItems = document.querySelectorAll(".nav-item");
const sections = document.querySelectorAll(".page-section");
const modalOverlay = document.getElementById("modal-overlay");
const modalTitle = document.getElementById("modal-title");
const modalBody = document.getElementById("modal-body");
const toast = document.getElementById("toast");

// ── Helpers ──────────────────────────────────────────────────
function initials(name) {
  return name
    .split(" ")
    .map((w) => w[0])
    .join("")
    .toUpperCase()
    .slice(0, 2);
}

function showToast(message) {
  toast.textContent = message;
  toast.classList.add("show");
  setTimeout(() => toast.classList.remove("show"), 3000);
}

function openModal(title, bodyHtml) {
  modalTitle.textContent = title;
  modalBody.innerHTML = bodyHtml;
  modalOverlay.classList.add("open");
}

function closeModal() {
  modalOverlay.classList.remove("open");
}

// ── Render Functions ─────────────────────────────────────────
function renderStats() {
  const grid = document.getElementById("stats-grid");
  grid.innerHTML = stats
    .map(
      (s) => `
    <div class="stat-card">
      <div class="stat-header">
        <div class="stat-icon ${s.color}">${s.icon}</div>
        <span class="stat-change ${s.up ? "up" : "down"}">${s.change}</span>
      </div>
      <div class="stat-value">${s.value}</div>
      <div class="stat-label">${s.label}</div>
    </div>`,
    )
    .join("");
}

function renderActivity() {
  const list = document.getElementById("activity-list");
  list.innerHTML = activities
    .map(
      (a) => `
    <li class="activity-item">
      <div class="activity-dot ${a.type}">${a.type === "order" ? "📦" : a.type === "user" ? "👤" : "⚠️"}</div>
      <div class="activity-content">
        <p>${a.text}</p>
        <div class="time">${a.time}</div>
      </div>
    </li>`,
    )
    .join("");
}

function renderUsers(filter = "", statusFilter = "all") {
  const tbody = document.getElementById("users-tbody");
  const filtered = users.filter((u) => {
    const matchSearch =
      !filter ||
      u.name.toLowerCase().includes(filter.toLowerCase()) ||
      u.email.toLowerCase().includes(filter.toLowerCase());
    const matchStatus = statusFilter === "all" || u.status === statusFilter;
    return matchSearch && matchStatus;
  });

  tbody.innerHTML =
    filtered.length === 0
      ? `<tr><td colspan="6" style="text-align:center;color:var(--muted);padding:32px;">No users found</td></tr>`
      : filtered
          .map(
            (u) => `
      <tr>
        <td>
          <div class="user-cell">
            <div class="mini-avatar">${initials(u.name)}</div>
            <span>${u.name}</span>
          </div>
        </td>
        <td>${u.email}</td>
        <td>${u.role}</td>
        <td><span class="status-badge ${u.status}">${u.status}</span></td>
        <td>${u.joined}</td>
        <td>
          <div class="table-actions">
            <button class="btn-sm" onclick="editUser(${u.id})">Edit</button>
            <button class="btn-sm danger" onclick="deleteUser(${u.id})">Delete</button>
          </div>
        </td>
      </tr>`,
          )
          .join("");
}

function renderOrders() {
  const tbody = document.getElementById("orders-tbody");
  tbody.innerHTML = orders
    .map(
      (o) => `
    <tr>
      <td><strong>${o.id}</strong></td>
      <td>${o.customer}</td>
      <td>${o.amount}</td>
      <td><span class="status-badge ${o.status}">${o.status}</span></td>
      <td>${o.date}</td>
      <td><button class="btn-sm" onclick="viewOrder('${o.id}')">View</button></td>
    </tr>`,
    )
    .join("");
}

function renderProducts() {
  const grid = document.getElementById("products-grid");
  grid.innerHTML = products
    .map(
      (p) => `
    <div class="product-card">
      <div class="product-image">${p.emoji}</div>
      <div class="product-body">
        <h3>${p.name}</h3>
        <div class="price">$${p.price.toFixed(2)}</div>
        <div class="stock">${p.stock} in stock</div>
        <div class="product-actions">
          <button class="btn-sm" onclick="editProduct(${p.id})">Edit</button>
          <button class="btn-sm danger" onclick="deleteProduct(${p.id})">Delete</button>
        </div>
      </div>
    </div>`,
    )
    .join("");
}

function renderAnalytics() {
  const grid = document.getElementById("analytics-grid");
  grid.innerHTML = analyticsMetrics
    .map(
      (m) => `
    <div class="analytics-card">
      <h3>${m.label}</h3>
      <div class="metric-row">
        <span class="label">Current</span>
        <span class="value">${m.value}</span>
      </div>
      <div class="progress-bar">
        <div class="progress-fill" style="width:${m.percent}%;background:${m.color}"></div>
      </div>
      <div class="metric-row">
        <span class="label">Target progress</span>
        <span class="value">${m.percent}%</span>
      </div>
    </div>`,
    )
    .join("");
}

// ── Chart (Canvas) ───────────────────────────────────────────
function drawChart(days = 7) {
  const canvas = document.getElementById("revenue-chart");
  if (!canvas) return;

  const ctx = canvas.getContext("2d");
  const dpr = window.devicePixelRatio || 1;
  const rect = canvas.parentElement.getBoundingClientRect();

  canvas.width = rect.width * dpr;
  canvas.height = rect.height * dpr;
  canvas.style.width = rect.width + "px";
  canvas.style.height = rect.height + "px";
  ctx.scale(dpr, dpr);

  const data = chartData[days] || chartData[7];
  const w = rect.width;
  const h = rect.height;
  const pad = { top: 20, right: 20, bottom: 30, left: 50 };
  const chartW = w - pad.left - pad.right;
  const chartH = h - pad.top - pad.bottom;

  const max = Math.max(...data) * 1.1;
  const min = Math.min(...data) * 0.9;
  const range = max - min;

  const isDark = document.documentElement.getAttribute("data-theme") === "dark";
  const gridColor = isDark ? "rgba(255,255,255,0.06)" : "rgba(15,23,42,0.06)";
  const textColor = isDark ? "#94a3b8" : "#64748b";

  ctx.clearRect(0, 0, w, h);

  // Grid lines
  for (let i = 0; i <= 4; i++) {
    const y = pad.top + (chartH / 4) * i;
    ctx.strokeStyle = gridColor;
    ctx.lineWidth = 1;
    ctx.beginPath();
    ctx.moveTo(pad.left, y);
    ctx.lineTo(w - pad.right, y);
    ctx.stroke();

    const val = max - (range / 4) * i;
    ctx.fillStyle = textColor;
    ctx.font = "11px Inter, sans-serif";
    ctx.textAlign = "right";
    ctx.fillText("$" + Math.round(val / 100) * 100, pad.left - 8, y + 4);
  }

  // Line path
  const points = data.map((val, i) => ({
    x: pad.left + (chartW / (data.length - 1)) * i,
    y: pad.top + chartH - ((val - min) / range) * chartH,
  }));

  // Gradient fill
  const gradient = ctx.createLinearGradient(0, pad.top, 0, h - pad.bottom);
  gradient.addColorStop(0, "rgba(91, 141, 239, 0.25)");
  gradient.addColorStop(1, "rgba(91, 141, 239, 0)");

  ctx.beginPath();
  ctx.moveTo(points[0].x, h - pad.bottom);
  points.forEach((p) => ctx.lineTo(p.x, p.y));
  ctx.lineTo(points[points.length - 1].x, h - pad.bottom);
  ctx.closePath();
  ctx.fillStyle = gradient;
  ctx.fill();

  // Line
  ctx.beginPath();
  ctx.moveTo(points[0].x, points[0].y);
  points.forEach((p) => ctx.lineTo(p.x, p.y));
  ctx.strokeStyle = "#5b8def";
  ctx.lineWidth = 2.5;
  ctx.lineJoin = "round";
  ctx.stroke();

  // Dots
  points.forEach((p) => {
    ctx.beginPath();
    ctx.arc(p.x, p.y, 4, 0, Math.PI * 2);
    ctx.fillStyle = "#5b8def";
    ctx.fill();
    ctx.strokeStyle = isDark ? "#1e293b" : "#fff";
    ctx.lineWidth = 2;
    ctx.stroke();
  });
}

// ── Navigation ───────────────────────────────────────────────
function switchSection(sectionId) {
  navItems.forEach((item) => {
    item.classList.toggle("active", item.dataset.section === sectionId);
  });
  sections.forEach((sec) => {
    sec.classList.toggle("active", sec.id === `section-${sectionId}`);
  });
  sidebar.classList.remove("open");
}

navItems.forEach((item) => {
  item.addEventListener("click", (e) => {
    e.preventDefault();
    switchSection(item.dataset.section);
  });
});

// ── Sidebar Toggle ───────────────────────────────────────────
menuToggle.addEventListener("click", () => sidebar.classList.add("open"));
sidebarClose.addEventListener("click", () => sidebar.classList.remove("open"));

// ── Theme Toggle ─────────────────────────────────────────────
const themeToggle = document.getElementById("theme-toggle");
const savedTheme = localStorage.getItem("admin-theme") || "light";

function setTheme(theme) {
  document.documentElement.setAttribute("data-theme", theme === "dark" ? "dark" : "");
  themeToggle.textContent = theme === "dark" ? "☀️" : "🌙";
  localStorage.setItem("admin-theme", theme);
  drawChart(parseInt(document.getElementById("chart-period").value));
}

setTheme(savedTheme);

themeToggle.addEventListener("click", () => {
  const current = localStorage.getItem("admin-theme") || "light";
  setTheme(current === "dark" ? "light" : "dark");
});

// ── Chart Period ─────────────────────────────────────────────
document.getElementById("chart-period").addEventListener("change", (e) => {
  drawChart(parseInt(e.target.value));
});

// ── User CRUD ────────────────────────────────────────────────
window.editUser = function (id) {
  const user = users.find((u) => u.id === id);
  if (!user) return;
  openModal(
    "Edit User",
    `<form class="modal-form" id="edit-user-form">
      <label>Name<input type="text" name="name" value="${user.name}" required /></label>
      <label>Email<input type="email" name="email" value="${user.email}" required /></label>
      <label>Role
        <select name="role">
          <option ${user.role === "Admin" ? "selected" : ""}>Admin</option>
          <option ${user.role === "Editor" ? "selected" : ""}>Editor</option>
          <option ${user.role === "Viewer" ? "selected" : ""}>Viewer</option>
        </select>
      </label>
      <label>Status
        <select name="status">
          <option value="active" ${user.status === "active" ? "selected" : ""}>Active</option>
          <option value="inactive" ${user.status === "inactive" ? "selected" : ""}>Inactive</option>
          <option value="pending" ${user.status === "pending" ? "selected" : ""}>Pending</option>
        </select>
      </label>
      <div class="modal-actions">
        <button type="button" class="btn-secondary" onclick="closeModal()">Cancel</button>
        <button type="submit" class="btn-primary">Save</button>
      </div>
    </form>`,
  );

  document.getElementById("edit-user-form").addEventListener("submit", (e) => {
    e.preventDefault();
    const fd = new FormData(e.target);
    Object.assign(user, {
      name: fd.get("name"),
      email: fd.get("email"),
      role: fd.get("role"),
      status: fd.get("status"),
    });
    renderUsers();
    closeModal();
    showToast("User updated successfully");
  });
};

window.deleteUser = function (id) {
  users = users.filter((u) => u.id !== id);
  renderUsers();
  showToast("User deleted");
};

document.getElementById("add-user-btn").addEventListener("click", () => {
  openModal(
    "Add User",
    `<form class="modal-form" id="add-user-form">
      <label>Name<input type="text" name="name" required /></label>
      <label>Email<input type="email" name="email" required /></label>
      <label>Role
        <select name="role">
          <option>Viewer</option>
          <option>Editor</option>
          <option>Admin</option>
        </select>
      </label>
      <div class="modal-actions">
        <button type="button" class="btn-secondary" onclick="closeModal()">Cancel</button>
        <button type="submit" class="btn-primary">Add User</button>
      </div>
    </form>`,
  );

  document.getElementById("add-user-form").addEventListener("submit", (e) => {
    e.preventDefault();
    const fd = new FormData(e.target);
    users.unshift({
      id: Date.now(),
      name: fd.get("name"),
      email: fd.get("email"),
      role: fd.get("role"),
      status: "pending",
      joined: new Date().toLocaleDateString("en-US", { month: "short", day: "numeric", year: "numeric" }),
    });
    renderUsers();
    closeModal();
    showToast("User added successfully");
  });
});

// ── Product CRUD ─────────────────────────────────────────────
window.editProduct = function (id) {
  const product = products.find((p) => p.id === id);
  if (!product) return;
  openModal(
    "Edit Product",
    `<form class="modal-form" id="edit-product-form">
      <label>Name<input type="text" name="name" value="${product.name}" required /></label>
      <label>Price<input type="number" name="price" value="${product.price}" step="0.01" required /></label>
      <label>Stock<input type="number" name="stock" value="${product.stock}" required /></label>
      <div class="modal-actions">
        <button type="button" class="btn-secondary" onclick="closeModal()">Cancel</button>
        <button type="submit" class="btn-primary">Save</button>
      </div>
    </form>`,
  );

  document.getElementById("edit-product-form").addEventListener("submit", (e) => {
    e.preventDefault();
    const fd = new FormData(e.target);
    Object.assign(product, {
      name: fd.get("name"),
      price: parseFloat(fd.get("price")),
      stock: parseInt(fd.get("stock")),
    });
    renderProducts();
    closeModal();
    showToast("Product updated");
  });
};

window.deleteProduct = function (id) {
  products = products.filter((p) => p.id !== id);
  renderProducts();
  showToast("Product deleted");
};

document.getElementById("add-product-btn").addEventListener("click", () => {
  openModal(
    "Add Product",
    `<form class="modal-form" id="add-product-form">
      <label>Name<input type="text" name="name" required /></label>
      <label>Price<input type="number" name="price" step="0.01" required /></label>
      <label>Stock<input type="number" name="stock" required /></label>
      <label>Emoji<input type="text" name="emoji" value="📦" maxlength="2" /></label>
      <div class="modal-actions">
        <button type="button" class="btn-secondary" onclick="closeModal()">Cancel</button>
        <button type="submit" class="btn-primary">Add Product</button>
      </div>
    </form>`,
  );

  document.getElementById("add-product-form").addEventListener("submit", (e) => {
    e.preventDefault();
    const fd = new FormData(e.target);
    products.unshift({
      id: Date.now(),
      name: fd.get("name"),
      price: parseFloat(fd.get("price")),
      stock: parseInt(fd.get("stock")),
      emoji: fd.get("emoji") || "📦",
    });
    renderProducts();
    closeModal();
    showToast("Product added");
  });
});

// ── Orders ───────────────────────────────────────────────────
window.viewOrder = function (orderId) {
  const order = orders.find((o) => o.id === orderId);
  if (!order) return;
  openModal(
    "Order Details",
    `<div style="display:flex;flex-direction:column;gap:12px;font-size:14px;">
      <div><strong>Order ID:</strong> ${order.id}</div>
      <div><strong>Customer:</strong> ${order.customer}</div>
      <div><strong>Amount:</strong> ${order.amount}</div>
      <div><strong>Status:</strong> <span class="status-badge ${order.status}">${order.status}</span></div>
      <div><strong>Date:</strong> ${order.date}</div>
      <div class="modal-actions" style="margin-top:8px;">
        <button class="btn-secondary" onclick="closeModal()">Close</button>
      </div>
    </div>`,
  );
};

// ── Modal & Misc Events ──────────────────────────────────────
document.getElementById("modal-close").addEventListener("click", closeModal);
modalOverlay.addEventListener("click", (e) => {
  if (e.target === modalOverlay) closeModal();
});
window.closeModal = closeModal;

document.getElementById("export-btn").addEventListener("click", () => {
  showToast("Report exported successfully!");
});

document.getElementById("notifications-btn").addEventListener("click", () => {
  showToast("You have 3 unread notifications");
});

document.getElementById("settings-form").addEventListener("submit", (e) => {
  e.preventDefault();
  showToast("Settings saved");
});

document.getElementById("user-search").addEventListener("input", (e) => {
  renderUsers(e.target.value, document.getElementById("user-status-filter").value);
});

document.getElementById("user-status-filter").addEventListener("change", (e) => {
  renderUsers(document.getElementById("user-search").value, e.target.value);
});

document.getElementById("search-input").addEventListener("keydown", (e) => {
  if (e.key === "Enter") {
    showToast(`Searching for "${e.target.value}"...`);
  }
});

// ── Init ─────────────────────────────────────────────────────
renderStats();
renderActivity();
renderUsers();
renderOrders();
renderProducts();
renderAnalytics();
drawChart(7);

window.addEventListener("resize", () => {
  drawChart(parseInt(document.getElementById("chart-period").value));
});
