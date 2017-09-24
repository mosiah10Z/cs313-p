<?xml version="1.0" encoding="UTF-8"?>
    <xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
        <!-- Identity transform -->

        <xsl:output method="html" indent="yes" />
        <xsl:template match="/">
            <html>

            <head>
                <style>
                    body {
                        background-color: linen;
                        padding-left: 50px;
                        padding-right: 1px;
                    }
                    
                    h1 {
                        color: maroon;
                        font-size: 4em;
                        margin: auto;
                        align-content: center;
                        text-align: left;
                    }
                    
                    th {
                        padding: 10px 10px 10px 10px;
                    }
                    
                    div {
                        padding-bottom: 20px;
                        padding-right: 10px;
                    }
                    
                    .names {
                        display: inline-block;
                    }

                </style>
            </head>

            <body>

                <header>
                    <h1><xsl:value-of select="//@name"/></h1></header>
                <div>
                    <xsl:for-each select="//troop">
                        <h2>
                        <xsl:value-of select="@troopNumber"/>&#160;
                                                <xsl:value-of select="@unitName"/>
                                                </h2>
                        <xsl:for-each select="scout">
                            <table class="names" border="1" style="border-collapse: collapse;">
                                <tr>
                                    <th>Name:</th>
                                    <td>
                                        <xsl:value-of select="firstName" />&#160;
                                        <xsl:value-of select="lastName" />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Address:</th>
                                    <td>
                                        <xsl:value-of select="address/street" />&#44;&#160;
                                        <xsl:value-of select="address/city" />&#44;&#160;
                                        <xsl:value-of select="address/state" />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Telephone:</th>
                                    <td>
                                        <xsl:value-of select="phone" />
                                    </td>
                                </tr>
                                <tr>
                                    <th>Rank:</th>
                                    <td>
                                        <xsl:value-of select="rank" />
                                    </td>

                                </tr>
                                <tr>
                                    <th>Merit Badge:</th>
                                    <td>
                                        <xsl:value-of select="meritBadge" />
                                    </td>
                                </tr>
                            </table>

                        </xsl:for-each>




                    </xsl:for-each>

                </div>
            </body>

            </html>
        </xsl:template>

    </xsl:stylesheet>
