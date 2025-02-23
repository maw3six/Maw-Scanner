# Maw-Scanner

Maw-Scanner is a **Webshell Scanner** developed in **Go** to detect suspicious PHP files based on **Path Traversal** and **Shell String**.

## 🚀 Main Features
- **Webshell detection** using patterns from `Shell-String.txt` `Other-String.txt` `Traversals.txt`.
- **Brute-force accessible paths** to find suspicious files.
- **Automatic crawling** to detect sensitive directories.
- **Search for files with suspicious extensions** like `.alfa` `.php` `.phar`.
- **Multi-threading with goroutines** for high-speed scanning.
- **Random User-Agent** for each request.
- **Real-time result saving** in `Shells.txt`.

## 🔍 Usage

### **1. Scan Domains from a File**
```sh
go run Maw-Scanner.go
```

## 📌 Notes
- **Do not use for illegal purposes!** Maw-Scanner is for security testing with proper authorization.
- Ensure **Shell-String.txt** and **Other-String.txt** are available in the same directory.
- Use responsibly.

## 👤 Author
- **Name:** [Maw]
- **GitHub:** [[Maw3Six](https://github.com/maw3six/)]
- **Telegram:** [@maw3six]

## ⚠ Disclaimer
The use of this tool is entirely the responsibility of the user. The author is not responsible for any misuse of this tool.

---

🔥 **Happy Webshell Hunting!** 🚀

