# PHP Stock Ticker v.01
This is a PHP web script for a live stock ticker which is based off [Mukesh Chapagain's](http://blog.chapagain.com.np/php-how-to-get-stock-quote-data-from-yahoo-finance-complete-code-and-tutorial/) work. To see a see my edited script running live please [click here](http://jt.bmsd.us/)


# Install
1. Download the [zip file](https://github.com/g60madman/php-stock-ticker/archive/master.zip)
2. Extract the zip
3. Make edits to the script,  please read [Mukesh Chapagain's](http://blog.chapagain.com.np/php-how-to-get-stock-quote-data-from-yahoo-finance-complete-code-and-tutorial/) website for more information
4. Upload to your webhosting provider, or run local using [LAMP on Linux](https://bitnami.com/stack/lamp/installer), [WinLAMP for Windows](http://winlamp.sourceforge.net/), or [LAMP for OSX](http://jason.pureconcepts.net/2012/10/install-apache-php-mysql-mac-os-x/).

# Changes & Documentation
This section will be a break down of changes I made to [Mukesh Chapagain's](http://blog.chapagain.com.np/php-how-to-get-stock-quote-data-from-yahoo-finance-complete-code-and-tutorial/) work along with edits you can make to the sctipt to meet your personal needs.

1. The first changes I made was integrating [Data Tables](http://www.datatables.net/) into the script. This allows for the following
  - very clean formating, I cleaned up their CSS based on my prefferences for font and link colors
  - searching through the list of stocks with a search box
  - expanding the list to hold upto 100 entries per page
  - sorting movers very easily based on Last Trade, Bid, Ask, Change, % Change and Volume of the shares

2. Besides the major formating with Data Tables I also cleaned up the class.yahoostock.php file so any stock name with the words  `, Inc` is being removed from the look up. I did this as it was creating a new column in the csv formating due to the `,`. While this is a dirty fix, it works for the needs of this script.

3. In the pennystockticker.php file I added the symbol up to be a URL linking to a 5day chart using the following [code](https://github.com/g60madman/php-stock-ticker/blob/master/pennystockticker.php#L97). You can make changes to the `range=` section of the code to change the age of the chart based on your personal preference.
  - 1 day `range=1d`
  - 5 day `range=5d`
  - 1 month `range=1m`
  - 3 month `range=3m`
  - 1 year `range=1y`
  - 2 year `range=2y`
  - 5 year `range=5y`
  - max `range=my`

4. The final change I made to the code was removing any `"` in the dumped data from the csv. This allowed for the URL link above to work properly as it was adding `%22` to the URL link causing issues to the chart.

If you have any questions regaurding this script feel free to contact me off my github email and I will assist where I can. As always, please enjoy!
