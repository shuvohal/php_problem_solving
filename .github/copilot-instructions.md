# Repo-specific instructions for AI/code assistants

This repository is a single-file collection of PHP practice problems (`part_1.php`) with a few small OOP examples and mostly procedural solutions. The guidance below is intended to make an AI coding agent productive quickly when making fixes, small improvements, or refactors.

Key points (short):
- The entire codebase is currently one PHP file: `part_1.php`. Work should be small, visible and runnable via PHP CLI or XAMPP.
- Use the PHP CLI to run and lint locally: `php -l part_1.php` (syntax check), `php part_1.php` (run).
- This project contains sample outputs printed directly via `echo`, `print_r`, or `__toString()` from classes. Preserve examples unless purposefully fixing a bug.

What to look for in `part_1.php` (explicit, discoverable patterns):
- Problem-by-problem blocks: many small functions and examples live in the same file. Edits should be localized (not split across many sections) so the file remains easy to read.
- Mixed styles: the repository uses procedural code for most tasks and a few small classes (`Transaction`, `Wallet`, `User`) at the bottom. Keep changes consistent in style within a section.
- Side-effect output: functions often `echo` or `print_r` directly — search for the string `echo` if you need to find visible behavior.

Specific examples and gotchas the AI should handle or watch for:
- Prime check bug: the prime-check loop in `part_1.php` uses the wrong modulo check (search for `check()`): ensure you test `if ($n % $i === 0)` rather than `if ($i % $n === 0)`.
- Calculator edge-cases: the calculator function has a typo (division branch checks `b != 0`) and returns a string message on division-by-zero — follow established minor fix patterns and add a small unit-like example after the function before changing usage.
- Use of `preg_match()` for email validation is present — modify carefully and keep test email examples (`test@gmail.com`) in place when altering patterns.
- OOP mini-payment system: `Wallet::transfer()` depends on `owner` being set by `User` when created. When editing transactions or transfers, ensure both wallets' `transactions` arrays are maintained.

Developer workflows and commands (explicit):
- Lint a file: `php -l part_1.php`
- Run the script (CLI): `php part_1.php`
- Run in XAMPP / browser: drop files in the XAMPP `htdocs` directory (already present in author's environment) and use `http://localhost/<path>/part_1.php`.

How to propose safe changes (best practices for PRs or patch suggestions):
- Keep changes small and focused — this repo is a learning/practice collection, and the owner expects small, self-contained edits.
- When fixing a bug in a sample function, add a tiny comment or an additional `echo` example showing expected output (do not remove canonical examples unless the change is a real improvement).
- If introducing new helper files or tests, add them in a clearly named folder (e.g., `tests/` or `examples/`) and include a README snippet explaining how to run them.

What *not* to change without explicit reason:
- Do not split `part_1.php` into many files unless the change is a dedicated refactor and includes tests or a short README describing the intent.
- Avoid changing presentation output (echo statements and printed sample outputs) unless fixing an obvious bug or improving clarity.

If you need more info from this project
- Look at `part_1.php` for examples and sample outputs.
- Ask the maintainer whether they prefer to keep everything in one file or would like a small refactor into `src/` + `tests/`.

If you find silent bugs or inconsistencies
- Fix the logic and add an inline example showing expected output.
- Run `php -l` and `php part_1.php` locally before committing.

Thanks — propose small, local, and testable edits.