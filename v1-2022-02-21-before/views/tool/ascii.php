<?php
$this->title = 'ascii编码表';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'ascii, 编码, iFantastic'], 'keywords');
?>

<div class="page-header text-center">
    <h4>ASCII（American Standard Code for Information Interchange，美国信息交换标准代码）是基于拉丁字母的一套电脑编码系统，主要用于显示现代英语和其他西欧语言。</h4>
</div>
<div class="alert alert-info" role="alert">
    <p>0～31及127(共33个)是控制字符或通信专用字符（其余为可显示字符）。如控制符：LF（换行）、CR（回车）、FF（换页）、DEL（删除）、BS（退格)、BEL（响铃）等；通信专用字符：SOH（文头）、EOT（文尾）、ACK（确认）等；ASCII值为8、9、10 和13 分别转换为退格、制表、换行和回车字符。它们并没有特定的图形显示，但会依不同的应用程序，而对文本显示有不同的影响。</p>
    <p>32～126(共95个)是字符(32是空格），其中48～57为0到9十个阿拉伯数字。</p>
    <p>65～90为26个大写英文字母，97～122号为26个小写英文字母，其余为一些标点符号、运算符号等。</p>
</div>
<table class="table table-striped table-hover table-condensed table-bordered">
    <caption>标准表</caption>
    <thead>
        <tr>
            <th scope="col">Bin(二进制)</th>
            <th scope="col">Oct(八进制)</th>
            <th scope="col">Dec(十进制)</th>
            <th scope="col">Hex(十六进制)</th>
            <th scope="col">缩写/字符</th>
            <th scope="col">解释</th>
        </tr>
    </thead>
    <tbody>
        <tr><td>0000 0000</td><td>0</td><td>0</td><td>0</td><td>NUL(null)</td><td>空字符</td></tr>
        <tr><td>0000 0001</td><td>1</td><td>1</td><td>1</td><td>SOH(start of headline)</td><td>标题开始</td></tr>
        <tr><td>0000 0010</td><td>2</td><td>2</td><td>2</td><td>STX (start of text)</td><td>正文开始</td></tr>
        <tr><td>0000 0011</td><td>3</td><td>3</td><td>3</td><td>ETX (end of text)</td><td>正文结束</td></tr>
        <tr><td>0000 0100</td><td>4</td><td>4</td><td>4</td><td>EOT (end of transmission)</td><td>传输结束</td></tr>
        <tr><td>0000 0101</td><td>5</td><td>5</td><td>5</td><td>ENQ (enquiry)</td><td>请求</td></tr>
        <tr><td>0000 0110</td><td>6</td><td>6</td><td>6</td><td>ACK (acknowledge)</td><td>收到通知</td></tr>
        <tr><td>0000 0111</td><td>7</td><td>7</td><td>7</td><td>BEL (bell)</td><td>响铃</td></tr>
        <tr><td>0000 1000</td><td>10</td><td>8</td><td>8</td><td>BS (backspace)</td><td>退格</td></tr>
        <tr><td>0000 1001</td><td>11</td><td>9</td><td>9</td><td>HT (horizontal tab)</td><td>水平制表符</td></tr>
        <tr><td>0000 1010</td><td>12</td><td>10</td><td>0A</td><td>LF (NL line feed, new line)</td><td>换行键</td></tr>
        <tr><td>0000 1011</td><td>13</td><td>11</td><td>0B</td><td>VT (vertical tab)</td><td>垂直制表符</td></tr>
        <tr><td>0000 1100</td><td>14</td><td>12</td><td>0C</td><td>FF (NP form feed, new page)</td><td>换页键</td></tr>
        <tr><td>0000 1101</td><td>15</td><td>13</td><td>0D</td><td>CR (carriage return)</td><td>回车键</td></tr>
        <tr><td>0000 1110</td><td>16</td><td>14</td><td>0E</td><td>SO (shift out)</td><td>不用切换</td></tr>
        <tr><td>0000 1111</td><td>17</td><td>15</td><td>0F</td><td>SI (shift in)</td><td>启用切换</td></tr>
        <tr><td>0001 0000</td><td>20</td><td>16</td><td>10</td><td>DLE (data link escape)</td><td>数据链路转义</td></tr>
        <tr><td>0001 0001</td><td>21</td><td>17</td><td>11</td><td>DC1 (device control 1)</td><td>设备控制1</td></tr>
        <tr><td>0001 0010</td><td>22</td><td>18</td><td>12</td><td>DC2 (device control 2)</td><td>设备控制2</td></tr>
        <tr><td>0001 0011</td><td>23</td><td>19</td><td>13</td><td>DC3 (device control 3)</td><td>设备控制3</td></tr>
        <tr><td>0001 0100</td><td>24</td><td>20</td><td>14</td><td>DC4 (device control 4)</td><td>设备控制4</td></tr>
        <tr><td>0001 0101</td><td>25</td><td>21</td><td>15</td><td>NAK (negative acknowledge)</td><td>拒绝接收</td></tr>
        <tr><td>0001 0110</td><td>26</td><td>22</td><td>16</td><td>SYN (synchronous idle)</td><td>同步空闲</td></tr>
        <tr><td>0001 0111</td><td>27</td><td>23</td><td>17</td><td>ETB (end of trans. block)</td><td>结束传输块</td></tr>
        <tr><td>0001 1000</td><td>30</td><td>24</td><td>18</td><td>CAN (cancel)</td><td>取消</td></tr>
        <tr><td>0001 1001</td><td>31</td><td>25</td><td>19</td><td>EM (end of medium)</td><td>媒介结束</td></tr>
        <tr><td>0001 1010</td><td>32</td><td>26</td><td>1A</td><td>SUB (substitute)</td><td>代替</td></tr>
        <tr><td>0001 1011</td><td>33</td><td>27</td><td>1B</td><td>ESC (escape)</td><td>换码(溢出)</td></tr>
        <tr><td>0001 1100</td><td>34</td><td>28</td><td>1C</td><td>FS (file separator)</td><td>文件分隔符</td></tr>
        <tr><td>0001 1101</td><td>35</td><td>29</td><td>1D</td><td>GS (group separator)</td><td>分组符</td></tr>
        <tr><td>0001 1110</td><td>36</td><td>30</td><td>1E</td><td>RS (record separator)</td><td>记录分隔符</td></tr>
        <tr><td>0001 1111</td><td>37</td><td>31</td><td>1F</td><td>US (unit separator)</td><td>单元分隔符</td></tr>
        <tr><td>0010 0000</td><td>40</td><td>32</td><td>20</td><td>(space)</td><td>空格</td></tr>
        <tr><td>0010 0001</td><td>41</td><td>33</td><td>21</td><td>!</td><td>叹号</td></tr>
        <tr><td>0010 0010</td><td>42</td><td>34</td><td>22</td><td>"</td><td>双引号</td></tr>
        <tr><td>0010 0011</td><td>43</td><td>35</td><td>23</td><td>#</td><td>井号</td></tr>
        <tr><td>0010 0100</td><td>44</td><td>36</td><td>24</td><td>$</td><td>美元符</td></tr>
        <tr><td>0010 0101</td><td>45</td><td>37</td><td>25</td><td>%</td><td>百分号</td></tr>
        <tr><td>0010 0110</td><td>46</td><td>38</td><td>26</td><td>&</td><td>和号</td></tr>
        <tr><td>0010 0111</td><td>47</td><td>39</td><td>27</td><td>'</td><td>闭单引号</td></tr>
        <tr><td>0010 1000</td><td>50</td><td>40</td><td>28</td><td>(</td><td>开括号</td></tr>
        <tr><td>0010 1001</td><td>51</td><td>41</td><td>29</td><td>)</td><td>闭括号</td></tr>
        <tr><td>0010 1010</td><td>52</td><td>42</td><td>2A</td><td>*</td><td>星号</td></tr>
        <tr><td>0010 1011</td><td>53</td><td>43</td><td>2B</td><td>+</td><td>加号</td></tr>
        <tr><td>0010 1100</td><td>54</td><td>44</td><td>2C</td><td>,</td><td>逗号</td></tr>
        <tr><td>0010 1101</td><td>55</td><td>45</td><td>2D</td><td>-</td><td>减号/破折号</td></tr>
        <tr><td>0010 1110</td><td>56</td><td>46</td><td>2E</td><td>.</td><td>句号</td></tr>
        <tr><td>101111</td><td>57</td><td>47</td><td>2F</td><td>/</td><td>斜杠</td></tr>
        <tr><td>110000</td><td>60</td><td>48</td><td>30</td><td>0</td><td>数字0</td></tr>
        <tr><td>110001</td><td>61</td><td>49</td><td>31</td><td>1</td><td>数字1</td></tr>
        <tr><td>110010</td><td>62</td><td>50</td><td>32</td><td>2</td><td>数字2</td></tr>
        <tr><td>110011</td><td>63</td><td>51</td><td>33</td><td>3</td><td>数字3</td></tr>
        <tr><td>110100</td><td>64</td><td>52</td><td>34</td><td>4</td><td>数字4</td></tr>
        <tr><td>110101</td><td>65</td><td>53</td><td>35</td><td>5</td><td>数字5</td></tr>
        <tr><td>110110</td><td>66</td><td>54</td><td>36</td><td>6</td><td>数字6</td></tr>
        <tr><td>110111</td><td>67</td><td>55</td><td>37</td><td>7</td><td>数字7</td></tr>
        <tr><td>111000</td><td>70</td><td>56</td><td>38</td><td>8</td><td>数字8</td></tr>
        <tr><td>111001</td><td>71</td><td>57</td><td>39</td><td>9</td><td>数字9</td></tr>
        <tr><td>111010</td><td>72</td><td>58</td><td>3A</td><td>:</td><td>冒号</td></tr>
        <tr><td>111011</td><td>73</td><td>59</td><td>3B</td><td>;</td><td>分号</td></tr>
        <tr><td>111100</td><td>74</td><td>60</td><td>3C</td><td><</td><td>小于</td></tr>
        <tr><td>111101</td><td>75</td><td>61</td><td>3D</td><td>=</td><td>等号</td></tr>
        <tr><td>111110</td><td>76</td><td>62</td><td>3E</td><td>></td><td>大于</td></tr>
        <tr><td>111111</td><td>77</td><td>63</td><td>3F</td><td>?</td><td>问号</td></tr>
        <tr><td>1000000</td><td>100</td><td>64</td><td>40</td><td>@</td><td>电子邮件符号</td></tr>
        <tr><td>1000001</td><td>101</td><td>65</td><td>41</td><td>A</td><td>大写字母A</td></tr>
        <tr><td>1000010</td><td>102</td><td>66</td><td>42</td><td>B</td><td>大写字母B</td></tr>
        <tr><td>1000011</td><td>103</td><td>67</td><td>43</td><td>C</td><td>大写字母C</td></tr>
        <tr><td>1000100</td><td>104</td><td>68</td><td>44</td><td>D</td><td>大写字母D</td></tr>
        <tr><td>1000101</td><td>105</td><td>69</td><td>45</td><td>E</td><td>大写字母E</td></tr>
        <tr><td>1000110</td><td>106</td><td>70</td><td>46</td><td>F</td><td>大写字母F</td></tr>
        <tr><td>1000111</td><td>107</td><td>71</td><td>47</td><td>G</td><td>大写字母G</td></tr>
        <tr><td>1001000</td><td>110</td><td>72</td><td>48</td><td>H</td><td>大写字母H</td></tr>
        <tr><td>1001001</td><td>111</td><td>73</td><td>49</td><td>I</td><td>大写字母I</td></tr>
        <tr><td>1001010</td><td>112</td><td>74</td><td>4A</td><td>J</td><td>大写字母J</td></tr>
        <tr><td>1001011</td><td>113</td><td>75</td><td>4B</td><td>K</td><td>大写字母K</td></tr>
        <tr><td>1001100</td><td>114</td><td>76</td><td>4C</td><td>L</td><td>大写字母L</td></tr>
        <tr><td>1001101</td><td>115</td><td>77</td><td>4D</td><td>M</td><td>大写字母M</td></tr>
        <tr><td>1001110</td><td>116</td><td>78</td><td>4E</td><td>N</td><td>大写字母N</td></tr>
        <tr><td>1001111</td><td>117</td><td>79</td><td>4F</td><td>O</td><td>大写字母O</td></tr>
        <tr><td>1010000</td><td>120</td><td>80</td><td>50</td><td>P</td><td>大写字母P</td></tr>
        <tr><td>1010001</td><td>121</td><td>81</td><td>51</td><td>Q</td><td>大写字母Q</td></tr>
        <tr><td>1010010</td><td>122</td><td>82</td><td>52</td><td>R</td><td>大写字母R</td></tr>
        <tr><td>1010011</td><td>123</td><td>83</td><td>53</td><td>S</td><td>大写字母S</td></tr>
        <tr><td>1010100</td><td>124</td><td>84</td><td>54</td><td>T</td><td>大写字母T</td></tr>
        <tr><td>1010101</td><td>125</td><td>85</td><td>55</td><td>U</td><td>大写字母U</td></tr>
        <tr><td>1010110</td><td>126</td><td>86</td><td>56</td><td>V</td><td>大写字母V</td></tr>
        <tr><td>1010111</td><td>127</td><td>87</td><td>57</td><td>W</td><td>大写字母W</td></tr>
        <tr><td>1011000</td><td>130</td><td>88</td><td>58</td><td>X</td><td>大写字母X</td></tr>
        <tr><td>1011001</td><td>131</td><td>89</td><td>59</td><td>Y</td><td>大写字母Y</td></tr>
        <tr><td>1011010</td><td>132</td><td>90</td><td>5A</td><td>Z</td><td>大写字母Z</td></tr>
        <tr><td>1011011</td><td>133</td><td>91</td><td>5B</td><td>[</td><td>开方括号</td></tr>
        <tr><td>1011100</td><td>134</td><td>92</td><td>5C</td><td>\</td><td>反斜杠</td></tr>
        <tr><td>1011101</td><td>135</td><td>93</td><td>5D</td><td>]</td><td>闭方括号</td></tr>
        <tr><td>1011110</td><td>136</td><td>94</td><td>5E</td><td>^</td><td>脱字符</td></tr>
        <tr><td>1011111</td><td>137</td><td>95</td><td>5F</td><td>_</td><td>下划线</td></tr>
        <tr><td>1100000</td><td>140</td><td>96</td><td>60</td><td>`</td><td>开单引号</td></tr>
        <tr><td>1100001</td><td>141</td><td>97</td><td>61</td><td>a</td><td>小写字母a</td></tr>
        <tr><td>1100010</td><td>142</td><td>98</td><td>62</td><td>b</td><td>小写字母b</td></tr>
        <tr><td>1100011</td><td>143</td><td>99</td><td>63</td><td>c</td><td>小写字母c</td></tr>
        <tr><td>1100100</td><td>144</td><td>100</td><td>64</td><td>d</td><td>小写字母d</td></tr>
        <tr><td>1100101</td><td>145</td><td>101</td><td>65</td><td>e</td><td>小写字母e</td></tr>
        <tr><td>1100110</td><td>146</td><td>102</td><td>66</td><td>f</td><td>小写字母f</td></tr>
        <tr><td>1100111</td><td>147</td><td>103</td><td>67</td><td>g</td><td>小写字母g</td></tr>
        <tr><td>1101000</td><td>150</td><td>104</td><td>68</td><td>h</td><td>小写字母h</td></tr>
        <tr><td>1101001</td><td>151</td><td>105</td><td>69</td><td>i</td><td>小写字母i</td></tr>
        <tr><td>1101010</td><td>152</td><td>106</td><td>6A</td><td>j</td><td>小写字母j</td></tr>
        <tr><td>1101011</td><td>153</td><td>107</td><td>6B</td><td>k</td><td>小写字母k</td></tr>
        <tr><td>1101100</td><td>154</td><td>108</td><td>6C</td><td>l</td><td>小写字母l</td></tr>
        <tr><td>1101101</td><td>155</td><td>109</td><td>6D</td><td>m</td><td>小写字母m</td></tr>
        <tr><td>1101110</td><td>156</td><td>110</td><td>6E</td><td>n</td><td>小写字母n</td></tr>
        <tr><td>1101111</td><td>157</td><td>111</td><td>6F</td><td>o</td><td>小写字母o</td></tr>
        <tr><td>1110000</td><td>160</td><td>112</td><td>70</td><td>p</td><td>小写字母p</td></tr>
        <tr><td>1110001</td><td>161</td><td>113</td><td>71</td><td>q</td><td>小写字母q</td></tr>
        <tr><td>1110010</td><td>162</td><td>114</td><td>72</td><td>r</td><td>小写字母r</td></tr>
        <tr><td>1110011</td><td>163</td><td>115</td><td>73</td><td>s</td><td>小写字母s</td></tr>
        <tr><td>1110100</td><td>164</td><td>116</td><td>74</td><td>t</td><td>小写字母t</td></tr>
        <tr><td>1110101</td><td>165</td><td>117</td><td>75</td><td>u</td><td>小写字母u</td></tr>
        <tr><td>1110110</td><td>166</td><td>118</td><td>76</td><td>v</td><td>小写字母v</td></tr>
        <tr><td>1110111</td><td>167</td><td>119</td><td>77</td><td>w</td><td>小写字母w</td></tr>
        <tr><td>1111000</td><td>170</td><td>120</td><td>78</td><td>x</td><td>小写字母x</td></tr>
        <tr><td>1111001</td><td>171</td><td>121</td><td>79</td><td>y</td><td>小写字母y</td></tr>
        <tr><td>1111010</td><td>172</td><td>122</td><td>7A</td><td>z</td><td>小写字母z</td></tr>
        <tr><td>1111011</td><td>173</td><td>123</td><td>7B</td><td>{</td><td>开花括号</td></tr>
        <tr><td>1111100</td><td>174</td><td>124</td><td>7C</td><td>|</td><td>垂线</td></tr>
        <tr><td>1111101</td><td>175</td><td>125</td><td>7D</td><td>}</td><td>闭花括号</td></tr>
        <tr><td>1111110</td><td>176</td><td>126</td><td>7E</td><td>~</td><td>波浪号</td></tr>
        <tr><td>1111111</td><td>177</td><td>127</td><td>7F</td><td>DEL (delete)</td><td>删除</tr>
    </tbody>
</table>
