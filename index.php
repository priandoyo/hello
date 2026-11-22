<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello World</title>
    <style>
        :body {
            margin: 0;
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: #f4f7fb;
            font-family: system-ui, sans-serif;
        }

        .card {
            max-width: 620px;
            margin: 24px;
            padding: 48px;
            text-align: center;
            background: white;
            border-radius: 16px;
            box-shadow: 0 12px 32px rgba(31, 41, 55, 0.12);
        }

        h1 {
            color: #2563eb;
        }

        blockquote {
            min-height: 72px;
            margin: 32px 0 24px;
            color: #1f2937;
            font-size: 1.35rem;
            line-height: 1.5;
        }

        cite {
            display: block;
            margin-top: 12px;
            color: #64748b;
            font-size: 1rem;
        }

        button {
            padding: 12px 20px;
            border: 0;
            border-radius: 999px;
            background: #2563eb;
            color: white;
            font-size: 1rem;
            font-weight: 700;
            cursor: pointer;
        }

        button:hover {
            background: #1d4ed8;
        }
    </style>
</head>
<body>
    <main class="card">
        <h1>Hello, World!</h1>
        <blockquote id="quote">
            “The secret of getting ahead is getting started.”
            <cite>— Mark Twain</cite>
        </blockquote>
        <button id="nextQuote" type="button">Show another quote</button>
    </main>

    <script>
        const quotes = [
            {
                text: "The secret of getting ahead is getting started.",
                author: "Mark Twain"
            },
            {
                text: "It always seems impossible until it’s done.",
                author: "Nelson Mandela"
            },
            {
                text: "The only way to do great work is to love what you do.",
                author: "Steve Jobs"
            },
            {
                text: "Life is what happens when you're busy making other plans.",
                author: "John Lennon"
            }
        ];

        let quoteIndex = 0;

        document.getElementById("nextQuote").addEventListener("click", () => {
            quoteIndex = (quoteIndex + 1) % quotes.length;
            document.getElementById("quote").innerHTML =
                `“${quotes[quoteIndex].text}”<cite>— ${quotes[quoteIndex].author}</cite>`;
        });
    </script>
</body>
</html>
