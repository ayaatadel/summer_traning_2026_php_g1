// Todo app script: add / toggle / delete / persist
const form = document.getElementById("todo-form");
const input = document.getElementById("todo-input");
const list = document.getElementById("todo-list");
const count = document.getElementById("count");
const clearBtn = document.getElementById("clear-completed");
const filterButtons = document.querySelectorAll(".filters button");
const emptyEl = document.getElementById("empty");

let todos = JSON.parse(localStorage.getItem("todos") || "[]");
let currentFilter = "all";

function save() {
  localStorage.setItem("todos", JSON.stringify(todos));
}

function createTodoElement(todo) {
  const li = document.createElement("li");
  li.className = "todo-item fade";
  li.dataset.id = todo.id;

  const left = document.createElement("div");
  left.className = "left";

  const checkbox = document.createElement("input");
  checkbox.type = "checkbox";
  checkbox.checked = !!todo.completed;

  const box = document.createElement("div");
  box.className = "checkbox" + (todo.completed ? " checked" : "");
  box.addEventListener("click", () => toggleTodo(todo.id));
  const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
  svg.setAttribute("viewBox", "0 0 24 24");
  svg.classList.add("check-mark");
  svg.innerHTML = '<polyline points="20 6 9 17 4 12" />';
  box.appendChild(checkbox);
  box.appendChild(svg);

  const text = document.createElement("div");
  text.className = "text" + (todo.completed ? " completed" : "");
  text.textContent = todo.text;

  left.appendChild(box);
  left.appendChild(text);

  const del = document.createElement("button");
  del.className = "delete";
  del.textContent = "Delete";
  del.addEventListener("click", () => deleteTodo(todo.id));

  li.appendChild(left);
  li.appendChild(del);
  // trigger enter animation
  setTimeout(() => li.classList.add("visible"), 20);
  return li;
}

function render() {
  list.innerHTML = "";
  const filtered = todos.filter((t) =>
    currentFilter === "all"
      ? true
      : currentFilter === "active"
        ? !t.completed
        : t.completed,
  );
  filtered.forEach((t) => list.appendChild(createTodoElement(t)));
  const remaining = todos.filter((t) => !t.completed).length;
  count.textContent = `${remaining} item${remaining !== 1 ? "s" : ""} left`;
  // empty state
  if (todos.length === 0) {
    if (emptyEl) emptyEl.style.display = "block";
  } else {
    if (emptyEl) emptyEl.style.display = "none";
  }
}

function addTodo(text) {
  const trimmed = String(text).trim();
  if (!trimmed) return;
  todos.unshift({
    id: Date.now().toString(36) + Math.random().toString(36).slice(2),
    text: trimmed,
    completed: false,
  });
  save();
  render();
}

function toggleTodo(id) {
  todos = todos.map((t) =>
    t.id === id ? { ...t, completed: !t.completed } : t,
  );
  save();
  render();
}

function deleteTodo(id) {
  todos = todos.filter((t) => t.id !== id);
  save();
  render();
}

form.addEventListener("submit", (e) => {
  e.preventDefault();
  addTodo(input.value);
  input.value = "";
  input.focus();
});

filterButtons.forEach((btn) =>
  btn.addEventListener("click", () => {
    filterButtons.forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");
    currentFilter = btn.dataset.filter;
    render();
  }),
);

clearBtn.addEventListener("click", () => {
  todos = todos.filter((t) => !t.completed);
  save();
  render();
});

// initial render
render();
