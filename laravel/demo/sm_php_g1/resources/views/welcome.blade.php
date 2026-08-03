<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: #f5f7fb;
      font-family: Arial, sans-serif;
    }

    .chat-widget {
      position: fixed;
      right: 24px;
      bottom: 90px;
      width: min(92vw, 420px);
      z-index: 9999;
    }

    .chat-card {
      border-radius: 18px;
      box-shadow: 0 12px 35px rgba(0, 0, 0, .18);
      overflow: hidden;
      background: white;
    }

    .chat-header {
      background: linear-gradient(135deg, #3b82f6, #8b5cf6);
      color: white;
      padding: 14px 16px;
    }

    .chat-body {
      max-height: 420px;
      overflow-y: auto;
      padding: 14px;
      background: #f8fafc;
    }

    .bubble {
      padding: 10px 12px;
      border-radius: 12px;
      display: inline-block;
      max-width: 85%;
      margin-bottom: 10px;
      white-space: pre-wrap;
    }

    .bubble-user {
      background: #2563eb;
      color: white;
      margin-left: auto;
    }

    .bubble-bot {
      background: white;
      color: #111827;
      border: 1px solid #e5e7eb;
    }

    .chat-footer {
      padding: 10px;
      border-top: 1px solid #e5e7eb;
    }

    .fab {
      position: fixed;
      right: 24px;
      bottom: 24px;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: linear-gradient(135deg, #3b82f6, #8b5cf6);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 28px;
      cursor: pointer;
      box-shadow: 0 10px 25px rgba(0, 0, 0, .25);
    }

    .hidden {
      display: none;
    }
  </style>
</head>

<body>
  <x-navbar></x-navbar>
  <div class="container py-5">
    <h1 class="text-center mb-3" style="color:#1d4ed8;">Smart AI Assistant</h1>
    <p class="text-center text-muted">Ask questions about your database and the assistant will try to answer using your
      data.</p>
  </div>

  <div id="chatWidget" class="chat-widget hidden">
    <div class="chat-card">
      <div class="chat-header">
        <strong>🤖 Smart Assistant</strong>
        <div class="small">Powered by GPT-4o mini</div>
      </div>
      <div id="chatMessages" class="chat-body"></div>
      <div class="chat-footer">
        <form id="chatForm">
          <div class="input-group">
            <input id="chatInput" type="text" class="form-control" placeholder="Ask something about your data..."
              required>
            <button class="btn btn-primary" type="submit">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div id="chatFab" class="fab" title="Open chatbot">💬</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const widget = document.getElementById('chatWidget');
            const fab = document.getElementById('chatFab');
            const form = document.getElementById('chatForm');
            const input = document.getElementById('chatInput');
            const messages = document.getElementById('chatMessages');

            fab.addEventListener('click', () => {
                widget.classList.toggle('hidden');
            });

            function addMessage(text, from) {
                const div = document.createElement('div');
                div.className = 'bubble ' + (from === 'user' ? 'bubble-user' : 'bubble-bot');
                div.textContent = text;
                messages.appendChild(div);
                messages.scrollTop = messages.scrollHeight;
            }

            form.addEventListener('submit', async (e) => {
                e.preventDefault();
                const message = input.value.trim();
                if (!message) return;

                addMessage(message, 'user');
                input.value = '';
                addMessage('Thinking...', 'bot');

                const response = await fetch('/chatbot/ask', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ message })
                });

                const data = await response.json();
                messages.lastChild.remove();
                addMessage(data.reply || 'No response', 'bot');
            });
  </script>
</body>

</html>