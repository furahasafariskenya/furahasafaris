#!/usr/bin/env bash
# Pre-deploy checks for the Furaha Adventures Kenya site.
# Usage: ./preflight.sh   (run from anywhere; exits non-zero on any failure)
set -uo pipefail

root="$(cd "$(dirname "$0")" && pwd)"
cd "$root" || exit 1
fail=0

echo "1) Merge-conflict markers"
markers="$(grep -rIl -E '^(<<<<<<< |=======$|>>>>>>> )' \
  --exclude-dir=.git --exclude-dir=node_modules --exclude-dir=vendor . 2>/dev/null || true)"
if [ -n "$markers" ]; then
  echo "   FAIL - unresolved markers in:"
  printf '     %s\n' $markers
  fail=1
else
  echo "   ok"
fi

echo "2) Icon sprite"
if [ ! -f p/includes/icons.php ]; then
  echo "   FAIL - p/includes/icons.php is missing"
  fail=1
else
  missing="$(grep -rL --include='*.php' 'includes/icons\.php' p | grep -v 'p/includes/icons.php' || true)"
  if [ -n "$missing" ]; then
    echo "   FAIL - page(s) do not load the sprite:"
    printf '     %s\n' $missing
    fail=1
  else
    echo "   ok"
  fi
fi

echo "3) PHP syntax"
if command -v php >/dev/null 2>&1; then
  count=0
  while IFS= read -r f; do
    count=$((count + 1))
    if ! out="$(php -l "$f" 2>&1)"; then
      echo "   FAIL $f"
      printf '     %s\n' "$out"
      fail=1
    fi
  done < <(find p -name '*.php' | sort)
  echo "   checked $count file(s)"
else
  echo "   SKIP - php is not on PATH; run this on the server or install php-cli"
  fail=1
fi

echo
if [ "$fail" -eq 0 ]; then
  echo "PREFLIGHT PASSED"
else
  echo "PREFLIGHT FAILED"
fi
exit "$fail"
