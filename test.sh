#!/bin/bash
RED='\033[1;31m'
GREEN='\033[1;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

echo -e "${YELLOW}------------${NC}"
echo -e "${YELLOW}Testing php file syntax${NC}"
echo
failedfiles=()

for file in *.php; do
  php -d error_reporting=32767 -l $file
  if [[  $? -ne 0 ]]; then
     failedfiles+=($file)
  fi
done

echo

if [ ${#failedfiles[@]} -eq 0  ]; then
  echo -e "${GREEN}No files have syntax errors, test passes!${NC}"
  echo -e "${YELLOW}------------${NC}"
  exit 0
else
  echo -e "${RED}${#failedfiles[@]} file(s) have syntax errors, test failed! Please try again!${NC}"
  echo -e "${YELLOW}------------${NC}"
  exit 1
fi
