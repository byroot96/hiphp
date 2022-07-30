#!/usr/bin/env python
# coding:utf-8
#   |                                                          |
# --+----------------------------------------------------------+--
#   |   Code by : yasserbdj96                                  |
#   |   Email   : yasser.bdj96@gmail.com                       |
#   |   Github  : https://github.com/yasserbdj96               |
#   |   BTC     : bc1q2dks8w8uurca5xmfwv4jwl7upehyjjakr3xga9   |
# --+----------------------------------------------------------+--  
#   |        all posts #yasserbdj96 ,all views my own.         |
# --+----------------------------------------------------------+--
#   |                                                          |

#START{
from hiphp import *

try:
    import os
    import sys
    #
    URL = os.environ['URL'] if "URL" in os.environ else sys.argv[2]
    KEY = os.environ['KEY'] if "KEY" in os.environ else sys.argv[1]
except Exception as e:
    print(f"USAGE : python3 {sys.argv[0]} <KEY> <URL>")
    exit()
    #pass

# connect:
p1=hiphp(key=KEY,url=URL)#Default: retu=False.
p2=hiphp(key=KEY,url=URL,retu=True)

# Command line interface:
if emsg_1 not in p2.cli():
    p1.cli()
else:
    # Get the hole Code:
    p1.get_hole()# Copy this code into the file whose path you entered earlier. ex: https://localhost/index.php
#}END.
