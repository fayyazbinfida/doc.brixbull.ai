<?php
    include('../header.php');
    include('../sidebar.php');
?>

<main class="page">
        <div class="theme-default-content content__default">
          <h1 id="tags"><a href="#tags" class="header-anchor">#</a> Tags</h1>
          <p>Tag a user by user's type, situation, status, etc for better management.</p>
          <h2 id="create-tag"><a href="#create-tag" class="header-anchor">#</a> Create Tag</h2>
          <p>In your workspace, go &quot;Tags&quot; from the left sidebar.</p>
          <p><img src="../../assets/img/tag2.074ee849.png" alt="tag"></p>
          <p>Here is where you manage your tags.</p>
          <div class="custom-block tip">
            <p class="custom-block-title">TIP</p>
            <p>You can also create tag by just typing in a new tag name and click it wherever you add tag.</p>
          </div>
          <p><img
              src="data:image/png;base64,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"
              alt="tag"></p>
          <h2 id="add-remove-tag"><a href="#add-remove-tag" class="header-anchor">#</a> Add / Remove Tag</h2>
          <p>In the Action step, click &quot;Flow Actions&quot;, then you can see &quot;Add Tag&quot; and &quot;Remove
            Tag&quot; options.</p>
          <p><img src="../../assets/img/tag1.d0d4bab1.png" alt="tag"></p>
          <h2 id="use-tag-in-condition-step"><a href="#use-tag-in-condition-step" class="header-anchor">#</a> Use Tag in
            Condition Step</h2>
          <p>Use condition step to help you guide users with different tags to different steps.</p>
          <p><img
              src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABBYAAAIXCAMAAAAfcC0HAAABjFBMVEX////19/r9/f0AhP+gqLX19fX8/Pz7+/z6+vr39/f5+fnk5+34+Pjz8/Pw8fLy8vLv7+8YHykAg/5YXWXu7u+tr7NDSFDc3d51eX/Ky82OkZYkKjRKT1c7QUlVW2Pl5+qnqrDDyNCiqrf09PSnrrr19vjt7vGutcDs7e7e4eVuc3np7O/p6uyqsbzi4+SZnKC3vcfh4+c0OkPCxMe4u75NU1uzusSTl5xlanD3+//d3+Kkp6uIjJHGyMp/g4nz9Pfn6OnZ3N8uND1UWWHR0tRpbnVBR09csf/V19jM0NeGiY9eY2rN0NK9v8Kws7aRlZl4fILx+f+2vMZhZm3T191zd33Q09nIzdSlrLknLzjY2du1t7p8gIVRVl+l0/9GTFQIiP/u8PKxt8Lj5ei9w8yqrbCfo6mPkpdbYGix2v+VmZ6coKTo9P/r7vWHxf9BpP/f8P/X7P+83/81nv9quP8Xj//P6P/F4/+g0v9zvP9Qq/98wP8znf/Hys65v8knl/+Wzf/5/f85oP+usrf86JJ2AAAdAklEQVR42uzbzWviQBjH8SGgNrLb3SHGtyReZEFkiRCVSn3BdW0Ra6sgPfSNPbVd2v//vpmYOlml0O4etPD9HMrUTB5Pz6+ZzFQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgoypJW2jlfOE/S2XGvtDM0ncBYJ+le6PZO2LB+NFzpQw6du7tsVDI/z5MfrT4JADsseGdfDTeHAvVqSPzltV2nObbY6G2vDXDcatoitCx20gLAHvs5tSqDN8aC6mFPPFViJhj873rkfQ0jAUA+88sdi6c1htjwejKRepfX1MMLWIB+BCuvcawcpsVkax9J4OBH/dyredJ9yGViIVhRY213LMrrzpNQ4Tsu6E/CGR+/nWrVC4MhIPnQColUciXo4gp1a/C2bWojtXN3vwMS/UNAWDHjMZobDx61y9LhHZ5fub1olj44TonR73TTl1HQVNO00IrtKMZzlNGxYL37J3N52dyWdsspWIhPWm5y/N+vxbHQubJOe0dnTjtQhQLi0UwOBoEzoUAsGOHy3pVzEZdodhynhXCsB3Vy2YxUI8B1YXUsdCQF8l7O/mZWoaUnVZ0c3Aezs88ytZmKRULLz9FHAstp6d+G7udQ3VJXn5VSZTvfBEAdqvpdFU2LNUG4pdOeyhCqbrq5fFomlmtMnQslGXpr3sfDBEa/lTNbMvVUmTilTdKbceCurCaYHRlS11abZKmp+F3Adipg0HUhw2npPr1dHAglK7q5XvZEkpVLyLMYjIWjLI3ibcY1MBWN0Vdv/i0UWo7FsIJ8XJk4oWDnGXlVrnjzASAnfLd22zUm7202jVoiMiF6uXyaCyUT4tXnhbMYtsXkXv1sS1LcSwUzY1S27GgJ9QqRTO+FH8BgJ3qyljb15uJaqD3JaNBbC4vkrFg5UTE3oyFjVLbsaAn5CxiAdgnqXpQsRRX3iT+gjeTTwvJ9X5LTtPve1po8rQAfCyzUcOIe7me0uv9+9W7haZQvl3qWPBd1xdr83VweJONWNClXomF41+Dg/W7BWIB2BvG42gmItlb71p86VSGq19WOxG99CoKdCyk58lTjk2nkdyJSMaCLvXqToTrr3ciiAVgbwwr9VSyxburwwbNQNqqcaNzC9m51LEgvp/J+qqdDzPis5qhzy0kY0GX0rFQDZNAn1s4dxbV+NwCsQDsj5bsiljNWh7GRxOX3pOnTzm6Z3+dJfCXUrqWVQnU68ZjK5rhPGU2YyFZat31XfmrfNR/OeX4rE451q/aBUEsAHsje+v6+hC00xTCvL+TQdH327YIDaeezDdSrTAWtEy/7knpndyrjc3Uw528qvcNsRULupSOhaztSu98/T8Rk8tAuk81QSwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP6wW8c2EIRAEAQxTgSChwcOOVz+CX0SSL83qspgjF4tAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB/N9d4gAvGmi3Ce3ZvwAV9n7cFmMdRgGv6SfgX1m7ANXu17xueBbioj/Z9TwMkFbcBCklIKmEDFJKQVMIGKCQhqYQNUEhCUgkboJCEpBI2QCEJSSVsgEISkkrYAIUkJJWwAX7s281O20AYheFPVnEMC9KRJ0kBs0iqkpCQkrQQoSZOCoWK32wQQkSVEP8L7n/fhHIF4Eozn9/nDs7iHHnGtkM0VEpDBsAhGiqlIQPgEA2V0pABcIh3lbq7uFo5aPidAXCbP5WycbkiMtc0J8PBwlsyxObVsgBQNAuV8vniGzOcpulWspym6a4AUDULn+bfnsHGJQGgahbCh8QYU668dxZ+PpXNt8FHETlsXpmp6dYA+bJ2Gcmr6HLN41mISsd720+bG++dhf3BqU3jQSg/kv7c/Li8L0DejG470esqdG5HHs9CpoeIUmyltFMU+XKxKUDujOr3kUxF9/WRz4eITGdhaTYLzc/MAvKqWK8GIkG1XvT6biGrWbDP8ZUxsZXJ7/58YYtDBPKp0a4GQbXd8PvKMaNZ2E2Gk8Vg9rQQLF2blZ39QIA8arWr1XbL8zcRGc3C5su3D+PYysLxA5OAHGu12y3fX1BmNAvLsxuFhT+xFRufMQvIs5sb779byGgWvu89b0yG27GV8NFMJeOCAMj1LBTGiUlKkwNbeDzfStO0v3omAPybhf+RYbJ9KFPRkL+nAGbhn9PrikwVD/oCgFmYaZwPv1p72DzZEADMwou74apZ+fVsBQCzAEBzpTRkAByioVIaMgAO0VApDRkAh2iolIYMgEM0VEpDBsAhGiqlIQPgEA2V0pABcIiGSmnIADhEQ6VqoQDITFgT/3W6AiAz3Y74b73H4wKQmbC3Lgoc9boMA5CJsNs7EhXWO7UPADJQ66h4VgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/GW3jmkAhmEACHqoAiRbtngxh/InVBJeat2BeD0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAw5y7H6DBvidGeCtXAA1W1hsDnBIFaLNqwi/cDKBN3vi/bRY+duqYCIEgAILgBRRCiDBCiH87GCD8YH+q28EGs3Ch5+vc3+MAksptgCGFpAobYEghqcIGGFJIqrABhhSSKmyAIYWkChtgSCGpwgYYUkiqsAGGFJIqbIAhhaQKG2BIIanCBhhSSKqwAYYUkvq74ft5H2D7Fn7s3G1r2lAYxvGLgPOBrnITTdQkgog1WI3FVpRq1RpbpNoqSChdFemzdJ9h331J2kgn27BQqm7375U5HF/khX+Sk2OEuKXRVfU8BHxKFmZ5MMbWOgv+Z4UkUSUa+7CsL/VYcJ3OgbH/w6f9pC4U6YcAGDN6/oIlGSpngbElbGgWtkfKARxdTTUgS8VuVdGKPgB6XSPzOgR7MJpvXCWEcK13ZY/4cTQlWxQwGiVSH4NAREykKyUrs8Q5RMWIPT2+b5JWSYMxtmDnMoBXgcudlWSh05604AjG6ACyVJZES6NGCPmeYg1EqvjtwdiIaACjbCbONLsi52MqP1X6OFYVcSzR0IeIeJIjGm4tnYVJrq8fSAN+qxtji5q3ewG4Anu3zZVk4Yi8+4EE1SBLyrmAO7PdEYoUFfA1p32zB8nSAQgZAdhXhluIu18KjRV7im9I14iINDMALJ2F0fbrR8bYgmb2PuBW4T7bxEqyEH2ThQRkKakDKNJDuDo9BFBzLyFUAx5ZigVfs3A4nbTcsDQCEbHdx3uyUIQtLslgjC0KZ1MCIKSyYWAtrhbcoygljDK9iNqDVgY238WJRkTzLHTa7mRZqoYjYlJ/VxainAXG/kgvpAQhVdCxoix0tV/XFqzMSxYOp1qi4uh7rfANqXp9dHH6JgtWZp4FMcJZYOyj7BZSqcLu2jyJSOqA8EQP27NTGS4vC33lJOxMm2fBKM9vIjgLjH1wFwq767JvQZacVcRj1V1yTIQApP1eFuJkZeCvOEXoK7k0EGqQt+TIWWDsY93crM0uR1lqt0WrRGd+5Huk1uumGPGycDdRrEGvp9oHrST1GkU7H2S6Dyg5C4z9xcZtZwKEzvw/EU4B4lVF++6uJTyqpJi1kJcFdEdUqucbzkHfJK0GtM40Uh994Cww9nubmoU33AJs+jkw9s/iLLCf7NyhEcAgEERRRIZCcDgw9JD+G0oTiMvOex2s+DcooERSzgIU5iwAgUklbIBCEpJK2ACFJCSVsAEKSUgqYQMUkpBUwgYoJCGphA1QSEJSCRugkISkEjZAIQlJJWyAQhKSGj52hov6aP+3dgOu2av93zyeC3BNP7MFeM92GOCKvs/bIsw1HuCCsSLeCgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHzs21lv00AUBeCrwSIhQMFKKUtbKlteYhKLtNDQhJYSNuGHIhSMY5Ao2VgCD3muFOW3MzaJWIpEgEgdX873UFXjutJ5uEcz0xQAAAAAAAAAAAAAsu5w1DkFAAvQGR0SC0fjYZ0AYAHqw/ERMXA4RikALEx9zGG/MBoSACzMcETZ18FmAWCB6h3KvlMEABgpdhkAFMJhpDhkAFAIh5HikAFAIRxGikMGAIVwGCkOGQAUwmGkOGQAUAiHkeKQAUAhHEaKQwYAhXAYKQ4ZABTCYaQ4ZABQCIeR4pABQCEcRopDBgCFcBip32UwLIcAIOu1cEmfufrXGQqBr2mmG+VQCwAcauF2sVhc11fk10d/m6Hsa60oarvtv90tVFy0CfyfFK2FxDX90j9ksN248W+HiACbDPhPqV8LZ57tbOlr788Qib0Xq7pUXJ4jQ6AF3+4WGj1N80NBRBvyO6udJ6J829K03gYROVVTPm5+XTIHNiUKE01ybduw0ofpqwmUBTDi9bxM1sLSztrutbf6TUFXt4q3bz3WP5XE7zOIlt+lKUOLB+XNninze3GvUTbMap5yE7NdbrqxR7brN51w4pGQS6XIkg8lsTSwNp0l0a215btWhUp+q1uIzDYBsHHW9/2zWawFsgXR6/WPS3Jhj+jyk+fn5shgu73Ct1pIZtmxDMrV/AtEFMUNapgBEe27tZxjhZRqxBERhXHj2NnDM0O53k/aRv5aACbKviEMv5zFWkgsF4vLs1q4cmauWmjRjBH3pytJNaQNMSDDKn19Vtl3/f60B7pEVImNY7XgWEktVFALwErSCpT0QvZqoXDrxkp6oTA9RKw+oz/dLVjOtBY8M5x1Rsu1SQpNjyqu5gfyp1vaVz/UQiHwTbkWUsVqXRBhjEMEcOG4g/SWbeA6WauF3B29+G7vYFvWgjh4oK8Wb4l5akEeF5bmrQUS/ZZmeXLprJOwv3tt37WCUiE9Z3iWplmBIAAW9t1qnhL5qrufsVpovN2+T3T/jayF0osPubn/mtLWouO10P3VIWJ69VLLTZd+eC1Mi2QzDkkMWjg/AB922gqzXrCzVQuXV66XSFxalbXwdOuzmLsWur7VP1YLuWp65RiYDfLigIguyDagVMu1G6Yh6Ju0JUKzmXZMKN8fYKcAfOQjm2bsKJ+tWji/o+/cefwwuXJceqxL67sX5zoIebFZjaKg2vyuFqjs+81y25Q1KQxzUG70Yo+6taAs1wwSA63a9Nq1TUo1zUGpsmG5mxuDWAuTbpDMiU0AzClfC9S/sfrqZf9mcVnc3l5LPxO9e3quDI6cZs10ve9rgcq12ceZRDD9OJM9MZM1IZciX9PiSZdSecPUenZTLtU23FC0LSOKIlkmBMCcwrXws0dbdwUR3d++cuYEMlSsgBITF9sF4C5DtfBMPyCpuXIvfwIZkltHKV+r5QiAtwzVQmNt/ebewe76WvMkMtiu7znOZnIZAcBchmqBnr7c0lcffiqdTIb0H6ri1gYBcJelWuCcAUAhHEaKQwYAhXAYKQ4ZABTCYaQ4ZABQCIeR4pABQCEcRopDBgCFcBgpDhkAFMJhpDhkAFAIh5HikAFAIRxGqlMnAFiYeoeybzQkAFiY4Yiy73CM7QLAwtTHh8TA0XiIYgBYiPpwfEQsHI46pwBgATojFnsFAAAAAACAL+zdMY7CMBBAUWckEsfOag9B6UPkLBwg92+XmTgKoQDEumDQf1PQhuZr7CDxLgHwri/8HxQxgWGYd+e72rAFgW0B+IdvSoN+GZYFhmkwsn66D4PYd2FVAFoIoryHQQJJABqfJHx3Ye+b6V82L3MP4Egq12GwsB2TMLxkXpZlHgDs9jS4PkhIkOouCPGJeelCt8wRgLqLg1TBYRfssVVtQtylh7QKQbuQAKQUd7UMfn/hJEGMReEYg+kRq8LahQnAdAyEhcHrtrCfHywKWwzGZ6wKWxdGAGZSaxlsYXC5LojOlVXhp+RXFavC1oWSARyUH+uCy2tHUVaFGC+l8/XwwMeSrlxiHFyuC6JTq/BbXD068Nmk/Drtwn7bGFPpAoBmupLsHOEtC3VZsCqk7OjBgc8nOWkX3K0LNxcLacoBQEN5SjH6WxdEZ10WppEsAE3lcdJ1wV0WTD9EsgCo9lmI/rJQX0NoFU5kAWgqn2xd6HtnWVD9ULPQAWioZmHwlQW5DlkAqvZZ8Hi5IKaeIcgC0DoL2gVvlwvr1QJZAEz7LHi8XBC1ZeFMFoCm8tllFgJZADZkQcnNi4gTWQDaZ+Hk7s5RrkMWgIos3G0LI1n4Y+feWhIJAzCO83S1pwTproO+NwrKQJjJROs2mMzQOsYGtUKoRAxtUp/BK7/4vpmWO1cjrRev/n/vhcfrP8/gAVhFFj47lwV73rOwTRaA/+rrtotZsMgCMEMWFtfCJ7IASKvJgms/ltqyyAIwQxb+WQtfvpEFYAVZcPDbz1vWMlkoFkz6Uf8kEYA1yoI9H83CTk0A1igLH14LANYtC/aQBWCOLCy3Fk6rt7fVXmhe7g6O9sKfsyyYQnEcdWV1o7GCSTsfPd9L5nfx6WjI9QU2m5tZyLwWavFJtzZpHBip1RjcnD7u996y4MW+LD/2Sk9RP6kXHgOZsHN1/CMnYJO5mYXMa+FwWJF0vGcUdKplKXfVCeZZkH/tSd61r97dpaTxXU8m3wwEbDg3s5B1LZSrzZKkytDIGz3Ieh558yzYGoxfY/Aw8qbvepCJLgRsOjezkHUt2ALMby6i/FSh+JaFcuiXSn5YVjP/ykyfBjadm1mwZ/ksHBdfeO8XEZrEnhdPpGa1Mn3tniwAzmbByngRsSsraRslhe969Z6F1n593GhJpp1oiiwAzmYh61qQP0ok1c+Ngk5cS2chN/jVHOSkXmRKZAFwOwtZ14JajbBbmwwPjHS6M+q36s+HC1nQ5d30M4jSn/Pdbq9/dkMWAGezYM8yX2dqnRlJye5B/iisL2ah0m5XZAWX8V6+4XtkAXA2CxY/rAZmyAL/twCkkAXWApBCFlgLQApZYC0AKWSBtQCkkAXWApBCFlgLQApZYC0AKWSBtfCXnXvpSSMK4zB+nHSYDpehBGhrC6YJGyIGEy/BYCRtvcR4azcu1DaNC5Xo99/3nMMM4lETHDHxledHvCRuCIsn/zkMAg6ywFoAHGSBtQA4yAJrAXCQBdYC4CALD60FBWCCZGZBP8gCkCALrAXAQRZYC4CDLLAWAAdZYC0ADrLAWgAcZIG1ADjIAmsBcJAF1gLgIAusBcBBFlgLgIMssBYAB1lgLQAOspB2LVz2QpWolKsKwJvKQpq1cHPskwXg7WYh5dkCWQDebhb0gywAQ2ThKWuh+rvdOzmZ7+pfv3wOlQrONksn222bhfDL/oLTiWq5oj6VT7/tlDZXZLwUgEUWnrAWqv/6Zwu727XuIAuZ6/ri7MZ6ZCoQdFY/qYeyUOtftb93fh4pYErJzML4a+Hrof7e3L/ybBZOdw6TCgSd2g/1YBY+7gVKZX6VmwqYTjKzMP5aWG0rbXGtaLNwNNeMK3BxvbOhHsnCitK26lsKmE4yszD+WihX4h8mC+YrrkDt617wWBZmlWZ+ANNJZhb045lZ6M/OVT2yALydLGjjHjl2Ry8iLuaawwocPnC2sG6zcMRFBKabzCyMvxZKZ/r7Qv/+kaMKrtYilYj6l55ShXmbhT9Zpf/KkSOmlswsjL8Wlv5+G3mDMujU17sH6+a+BROLTqBi3uLHleZpb99mYbXX5Q1KTDOZWXjC2cJub+nkuJ3czpQ1tzN9XrBZUMv1ZZUIb+ql2tHBvsnC8mWttLks46UADLKQ4p2IcXHWCIjNgn6QBWCILExqLdgElKxyhSwAKbPw7tW51NJnIYgqVuSRBeBuFrLvha6F91n+aRugyMJIFgKyAGgvlIVAVBaUp8gCMEQW7q2FBlkAJirXEJiFkbWQJwvAS2QhLy0L+nmSBWCILNyuhcGNC2QBmHgW4tsWMoKqoKNAFoAhsnBvLfhkAZionC8yCxZZAF5ETuBHIu6+FRH6OTFPG5DAy/mhvBPHeC4kWWjNKAATM9OKsyDqGsI5XDhvyXniwKvntc4lHi2MHC7YLjRbM3KeOvCqeTOtpq6CtA9K3TtcMHshB2AizFYQebSQrIVkLvh+o1AoRlH0AUBKURQVC4WG7ydjQVoWzFpI5kLcBROGYjECkEqxaKIQV2EwFsRlwcokXYjDoBUBpFAoJFEYVEHgWDBzIbmMiLtgNIwCgCdqGL5mq2AvIeSNBTsXRrugwxD6AJ4l1FHIZ2UeLBje7V6Iw5APSQOQWqjl4ygkVVDiujCQsV0wYcjmjRD4z769/TQNhgEYf9PqiguicwxE0ZgZEzVGGeC0IEZBrXgAq/HCoXOJiTpdys4bcMHhL/drnRwKGp1tdfr8msCAi909vO/XFV3od8VVFLwq9OQK4dG2H7BWYVDi2/oB/LT4tj7F2HXa2INVULYHBqVvRxzAT+vbYSjeqNCrw4Jo7uWJKcaOPgC/wNgR86LQs8OCoik7ZwweA0BXYsruJvRoFbx5YbcYgN+gbZPe3CB2LxIAgtKbNyb3LxKkAQgyCdKrxwq7aKQBCEQP34D4/iYhXFyRX1PP04fCln4+deB7a/mafiJgei3/T1SBQwb8OfPZjKGFzchk57UDrDROBE7XGyvyT/nj/zm4/rdrKmtoUTCyUwfMCgFXQe9o5AVA18YyEo3MmOxT00NSEwBdS8ckGrG07FPQQ1IQAF07JF0I6p300AgAskAWALJAFoBvyAJZAHzIAlkAfMgCWQB8yAJZAHzIAlkAfMgCWQB8yAJZAHzIAlkAfMgCWQB8/uYsDA+NkAWg5/04C+8+DCVOz924En0WGnlbxKyskQWgC+FlQVt49XhpZuLas4HIs1Coas12u1pyyALQhfCyMDK+GP9DS4RltwrqG0sE0IUQs3D48uWj0nFHbRPjt46LDCdzqdHE6Dm3F8cXzyTOLB4RY2ku8eD9kWCzUNU76hVTtIqlF+26ruTNNd1qbordLpAFwBNhFoaHluSbe7eeDM4kb8Vk+O3c7dyVc+MpkYsvkktPni5p2rWhyYszyRtGgFlYLZVWOy83KhtW266sr5lF9VOtXN6y7JJTb222yQLgiTALI7P3ZI9UclCGh17HRbQPJ4/I9NwdceXeTojIk7e5II8cNzbN6qq+rWpbKgg1XV9RcWi5c0OhWVolC4AryiwMDft+4WVhslOI/menNHEtfBxw14w3C0FmQS0KmpTrekfbtrz1wV0ltsrNzjZBFgCfKKeFwc/JV4mEl4WRThYGkynxnEp8lQoyC8py0TYd1YeWLSIqC3W7qG+VK+uWLZ5NhywAnuiy8PDMpHTcHb2dG9BGvpOFy3cGXUeCzYJSV0cKjll2rIY7LRSa5a01c8O9S2F51skC4IowC8duqgOEr669GHC3hT1ZuPCys0Skzl4M61OOldJy07bUi6r7dcN0iur7cqlS4AYl4BNNFmRydtr4NhCcF4m/3pOFnSPHByktnCyslirrFfdkcavsZmHVrpbcY4WW6ZAFwCeiLBifTt9cmplJTfdPzH6+krt9fW8Wrjx+/PTqxLl+bXp28eHdp4+mAszCWqnabhdLpqPntVbdKZu25fXAdLxamNW1jWpzmSwAriizINrIy3H1TMR0n7EwmhhN5e7vyYJcdD/O9L5PtIkXpxNvrg0EmAWrbIqYlbqur1dNMatOyc2Cs6lGB2W5pf5qFzlbAPb6G5+g5MFq4F9AFgCQBQBkAQBZIAsAWSALAFkgC8AuZIEsAD5kgSwAPmSBLAA+ZIEsAD5kgSwAPmSBLADhSsckGrG07FPQQ1IQAF0by0g0MmOyT00PSU0AdO1SNiZRiGUvyT75hh6KRl4AdG8+mwk/DLFMdl4OsBJKFxorAuB3XBpLHwpbeuySHChfK+gBK9SYFQB8aQ8OSAAAAAAE/X/djkAFAAAAAAAAAAAAuAo1XobYkmCBqAAAAABJRU5ErkJggg=="
              alt="tag"></p>
          <h2 id="use-tag-in-live-chat"><a href="#use-tag-in-live-chat" class="header-anchor">#</a> Use Tag in Live Chat
          </h2>
          <p>You can also manually add / remove / check tag for each user in &quot;Live Chat&quot; from the left
            sidebar.</p>
          <p><img src="../../assets/img/tag5.4ae220a0.png" alt="tag"></p>
        </div>
        <footer class="page-edit"><!---->
          <div class="last-updated"><span class="prefix">Last Updated:</span> <span class="time">7/26/2021, 6:55:29
              AM</span></div>
        </footer>
        <div class="page-nav">
          <p class="inner"><span class="prev">
              ←
              <a href="custom-field.php" class="prev">
                Custom Fields
              </a></span> <span class="next"><a href="otn.php">
                OTN - One Time Notification (Facebook)
              </a>
              →
            </span></p>
        </div>
      </main>

<?php
    include('../footer.php');
?>