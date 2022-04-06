# -*- coding: utf-8 -*-
"""
Created on Wed Apr  6 11:11:34 2022

@author: thach
"""

import numpy as np 
import pandas as pd # data processing, CSV file I/O (e.g. pd.read_csv)

# Input data files are available in the read-only "../input/" directory
# For example, running this (by clicking run or pressing Shift+Enter) will list all files under the input directory


# Step1 :Read all files individually
Happiness_2015 = pd.read_csv("World Happiness Report/2015.csv")
Happiness_2016 = pd.read_csv("World Happiness Report/2016.csv")
Happiness_2017 = pd.read_csv("World Happiness Report/2017.csv")
Happiness_2018 = pd.read_csv("World Happiness Report/2018.csv")
Happiness_2019 = pd.read_csv("World Happiness Report/2019.csv")




# Step 2: Dropping Extra Columns
Happiness_2015.drop(['Region', 'Standard Error', 'Dystopia Residual'], inplace=True, axis=1)
Happiness_2016.drop(['Region', 'Lower Confidence Interval', 'Upper Confidence Interval',
                     'Dystopia Residual'], inplace=True, axis=1)
Happiness_2017.drop(['Whisker.high', 'Whisker.low', 'Dystopia.Residual'], inplace=True, axis=1)


# Step 3: Standardinsing Names
Happiness_2015.rename(columns={'Happiness Rank': 'Happiness_Rank', 'Happiness Score': 'Happiness_Score',
                               'Economy (GDP per Capita)': 'Economy', 'Health (Life Expectancy)': 'Health',
                               'Trust (Government Corruption)': 'Trust'}, inplace=True)

Happiness_2016.rename(columns={'Happiness Rank': 'Happiness_Rank', 'Happiness Score': 'Happiness_Score',
                               'Economy (GDP per Capita)': 'Economy', 'Health (Life Expectancy)': 'Health',
                               'Trust (Government Corruption)': 'Trust'}, inplace=True)
Happiness_2017.rename(columns={'Happiness.Rank': 'Happiness_Rank', 'Happiness.Score': 'Happiness_Score',
                               'Economy..GDP.per.Capita.': 'Economy', 'Health..Life.Expectancy.': 'Health',
                               'Trust..Government.Corruption.': 'Trust'}, inplace=True)
Happiness_2018.rename(columns={'Overall rank': 'Happiness_Rank', 'Country or region': 'Country',
                               'Score': 'Happiness_Score', 'GDP per capita': 'Economy', 'Social support': 'Family',
                               'Healthy life expectancy': 'Health', 'Freedom to make life choices': 'Freedom',
                               'Perceptions of corruption': 'Trust'}, inplace=True)
Happiness_2018 = Happiness_2018[
    ['Country', 'Happiness_Rank', 'Happiness_Score', 'Economy', 'Family', 'Health', 'Freedom', 'Generosity', 'Trust']]
Happiness_2019.rename(columns={'Overall rank': 'Happiness_Rank', 'Country or region': 'Country',
                               'Score': 'Happiness_Score', 'GDP per capita': 'Economy', 'Social support': 'Family',
                               'Healthy life expectancy': 'Health', 'Freedom to make life choices': 'Freedom',
                               'Perceptions of corruption': 'Trust'}, inplace=True)
Happiness_2019 = Happiness_2019[
    ['Country', 'Happiness_Rank', 'Happiness_Score', 'Economy', 'Family', 'Health', 'Freedom', 'Generosity', 'Trust']]

# Step 4:Standardizing Column Sequence
Happiness_2015 = Happiness_2015[
    ['Country', 'Happiness_Rank', 'Happiness_Score', 'Economy', 'Family', 'Health', 'Freedom', 'Generosity', 'Trust']]
Happiness_2016 = Happiness_2016[
    ['Country', 'Happiness_Rank', 'Happiness_Score', 'Economy', 'Family', 'Health', 'Freedom', 'Generosity', 'Trust']]
Happiness_2017 = Happiness_2017[
    ['Country', 'Happiness_Rank', 'Happiness_Score', 'Economy', 'Family', 'Health', 'Freedom', 'Generosity', 'Trust']]
Happiness_2018 = Happiness_2018[
    ['Country', 'Happiness_Rank', 'Happiness_Score', 'Economy', 'Family', 'Health', 'Freedom', 'Generosity', 'Trust']]
Happiness_2019 = Happiness_2019[
    ['Country', 'Happiness_Rank', 'Happiness_Score', 'Economy', 'Family', 'Health', 'Freedom', 'Generosity', 'Trust']]



import matplotlib.pyplot as plt
import seaborn as sns


############## Information about 2015 ########################################################################################################
print("#######################    2015   ###################################")
pd.set_option('display.max_columns', None)


# Add year column to data
Happiness_2015["Year"] = "2015"

# Convert to DataFrame
Happiness_2015_df = pd.DataFrame(data=Happiness_2015)
Happiness_2015_df.index = Happiness_2015_df.index+1

#Some detail about information analytic, top 5 first rank and top 5 last rank  in 2015
print("\n Sumary \n",Happiness_2015_df.describe())
print("\n Top 5 first rank \n",Happiness_2015_df.head())
#top 5 first rank : Switzerland, Iceland, Denmark, Norway, Canada
print("\n Top 5 last rank \n",Happiness_2015_df.tail())
#top 5 last rank : Togo, Buruni, Syria, Benin, Rwanda


#Correlation matrix
happiness_relationship = Happiness_2015_df.corr()
sns.heatmap(happiness_relationship, annot=True)
plt.xticks(rotation=20, fontsize=10)
plt.show()

#STRONG IMPACT (as max of happiness score is 7.5 in Describe result)
strong_impact = happiness_relationship[happiness_relationship >= 0.70]
print("\n Strong impact \n",strong_impact)

#Result showed that Economy, Family and Health have strongest impact on Happiness_Score, the following graphes will show more detail on this impact
#Scatter plot between Economy,Family,Health and Hapiness_Score

#Economy
plt.figure(figsize=(10, 6))
plt.title("Impact of Economy on Happiness Score 2015")
plt.xlabel("Happiness_Score")
plt.ylabel("Economy")
plt.scatter(Happiness_2015_df.Happiness_Score, Happiness_2015_df.Economy)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()


#Health
plt.figure(figsize=(10, 6))
plt.title("Impact of Health on Happiness Score 2015")
plt.xlabel("Happiness_Score")
plt.ylabel("Health")
plt.scatter(Happiness_2015_df.Happiness_Score, Happiness_2015_df.Health)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.plot(x_lim, y_lim, color="green")
plt.xticks(rotation=360)
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#Family
plt.figure(figsize=(10, 6))
plt.title("Impact of Family on Happiness Score 2015")
plt.xlabel("Happiness_Score")
plt.ylabel("Family")
plt.scatter(Happiness_2015_df.Happiness_Score, Happiness_2015_df.Family)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#WEAK IMPACT
weak_impact = happiness_relationship[(happiness_relationship >= 0.4) & (happiness_relationship < 0.70)]
print("\n Weak impact \n",weak_impact)
#Result showed only Freedom has weak impact on Hapiness_Score
#Freedom
plt.figure(figsize=(10, 6))
plt.title("Impact of Freedom on Happiness Score 2015")
plt.xlabel("Happiness_Score")
plt.ylabel("Freedom")
plt.scatter(Happiness_2015_df.Happiness_Score, Happiness_2015_df.Freedom)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#NO IMPACT
no_impact = happiness_relationship[(happiness_relationship >= 0) & (happiness_relationship < 0.4)]
print("\n No impact \n",no_impact)
#The elements have no impact on Happiness_Score is Generosity and Trust
#Generosity
plt.figure(figsize=(10, 6))
plt.title("Impact of Generosity on Happiness Score 2015")
plt.xlabel("Happiness_Score")
plt.ylabel("Generosity")
plt.scatter(Happiness_2015_df.Happiness_Score, Happiness_2015_df.Generosity)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#Trust
plt.figure(figsize=(10, 6))
plt.title("Impact of Trust on Happiness Score 2015")
plt.xlabel("Happiness_Score")
plt.ylabel("Trust")
plt.scatter(Happiness_2015_df.Happiness_Score, Happiness_2015_df.Trust)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

############## Information about 2016 ########################################################################################################
print("#######################    2016   ###################################")
pd.set_option('display.max_columns', None)

# Add year column to data
Happiness_2016["Year"] = "2016"

# Convert to DataFrame
Happiness_2016_df = pd.DataFrame(data=Happiness_2016)
Happiness_2016_df.index = Happiness_2016_df.index+1

#Some detail about information analytic, top 5 first rank and top 5 last rank  in 2016
print("\n Sumary \n",Happiness_2016_df.describe())
print("\n Top 5 first rank \n",Happiness_2016_df.head())

print("\n Top 5 last rank \n",Happiness_2016_df.tail())


#Correlation matrix
happiness_relationship = Happiness_2016_df.corr()
sns.heatmap(happiness_relationship, annot=True)
plt.xticks(rotation=20, fontsize=10)
plt.show()

#STRONG IMPACT
strong_impact = happiness_relationship[happiness_relationship >= 0.70]
print("\n Strong impact \n",strong_impact)

#Result showed that Economy, Family and Health have strongest impact on Happiness_Score, the following graphes will show more detail on this impact
#Scatter plot between Economy,Family,Health and Happiness_Score

#Economy
plt.figure(figsize=(10, 6))
plt.title("Impact of Economy on Happiness Score in 2016")
plt.xlabel("Happiness_Score")
plt.ylabel("Economy")
plt.scatter(Happiness_2016_df.Happiness_Score, Happiness_2016_df.Economy)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#Health
plt.figure(figsize=(10, 6))
plt.title("Impact of Health on Happiness Score in 2016")
plt.xlabel("Happiness_Score")
plt.ylabel("Health")
plt.scatter(Happiness_2016_df.Happiness_Score, Happiness_2016_df.Health)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#Family
plt.figure(figsize=(10, 6))
plt.title("Impact of Family on Happiness Score in 2016")
plt.xlabel("Happiness_Score")
plt.ylabel("Family")
plt.xticks(rotation=360)
plt.scatter(Happiness_2016_df.Happiness_Score, Happiness_2016_df.Family)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()


#WEAK IMPACT
weak_impact = happiness_relationship[(happiness_relationship >= 0.4) & (happiness_relationship < 0.70)]
print("\n Weak impact \n",weak_impact)

# Freedom
plt.figure(figsize=(10, 6))
plt.title("Impact of Freedom on Happiness Score in 2016")
plt.xlabel("Happiness_Score")
plt.ylabel("Freedom")
plt.scatter(Happiness_2016_df.Happiness_Score, Happiness_2016_df.Freedom)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()



# Trust
plt.figure(figsize=(10, 6))
plt.title("Impact of Trust on Happiness Score in 2016")
plt.xlabel("Happiness_Score")
plt.ylabel("Trust")
plt.scatter(Happiness_2016_df.Happiness_Score, Happiness_2016_df.Trust)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()


#NO IMPACT
no_impact = happiness_relationship[(happiness_relationship >= 0) & (happiness_relationship < 0.4)]
print("\n No impact \n",no_impact)

#Generosity
plt.figure(figsize=(10, 6))
plt.title("Impact of Generosity on Happiness Score in 2016")
plt.xlabel("Happiness_Score")
plt.ylabel("Generosity")
plt.scatter(Happiness_2016_df.Happiness_Score, Happiness_2016_df.Generosity)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#Trust
plt.figure(figsize=(10, 6))
plt.title("Impact of Trust on Happiness Score")
plt.xlabel("Happiness_Score")
plt.ylabel("Trust")
plt.scatter(Happiness_2016_df.Happiness_Score, Happiness_2016_df.Trust)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()


############## Information about 2017 ########################################################################################################
print("#######################    2017   ###################################")
pd.set_option('display.max_columns', None)

# Add year column to data
Happiness_2017["Year"] = "2017"

# Convert to DataFrame
Happiness_2017_df = pd.DataFrame(data=Happiness_2017)
Happiness_2017_df.index = Happiness_2017_df.index+1

#Some detail about information analytic, top 5 first rank and top 5 last rank  in 2017
print("\n Sumary \n",Happiness_2017_df.describe())
print("\n Top 5 first rank \n",Happiness_2017_df.head())
print("\n Top 5 last rank \n",Happiness_2017_df.tail())

#Correlation matrix
happiness_relationship = Happiness_2017_df.corr()
sns.heatmap(happiness_relationship, annot=True)
plt.xticks(rotation=20, fontsize=10)
plt.show()

#STRONG IMPACT
strong_impact = happiness_relationship[happiness_relationship >= 0.70]
print("\n Strong impact \n",strong_impact)

#Economy,Family,Health

#Economy
plt.figure(figsize=(10, 6))
plt.title("Impact of Economy on Happiness Score in 2017")
plt.xlabel("Happiness_Score")
plt.ylabel("Economy")
plt.scatter(Happiness_2017_df.Happiness_Score, Happiness_2017_df.Economy)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#Health
plt.figure(figsize=(10, 6))
plt.title("Impact of Health on Happiness Score in 2017")
plt.xlabel("Happiness_Score")
plt.ylabel("Health")
plt.scatter(Happiness_2017_df.Happiness_Score, Happiness_2017_df.Health)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#Family
plt.figure(figsize=(10, 6))
plt.title("Impact of Family on Happiness Score in 2017")
plt.xlabel("Happiness_Score")
plt.ylabel("Family")
plt.scatter(Happiness_2017_df.Happiness_Score, Happiness_2017_df.Family)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#WEAK IMPACT
weak_impact = happiness_relationship[(happiness_relationship >= 0.4) & (happiness_relationship < 0.70)]
print("\n Weak impact \n",weak_impact)

# Freedom
plt.figure(figsize=(10, 6))
plt.title("Impact of Freedom on Happiness Score in 2017")
plt.xlabel("Happiness_Score")
plt.ylabel("Freedom")
plt.scatter(Happiness_2017_df.Happiness_Score, Happiness_2017_df.Freedom)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#Trust
plt.figure(figsize=(10, 6))
plt.title("Impact of Trust on Happiness Score in 2017")
plt.xlabel("Happiness_Score")
plt.ylabel("Trust")
plt.xticks(rotation=360)
plt.scatter(Happiness_2017_df.Happiness_Score, Happiness_2017_df.Trust)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()


#NO IMPACT
no_impact = happiness_relationship[(happiness_relationship >= 0) & (happiness_relationship < 0.4)]
print("\n No impact \n",no_impact)

#Generosity
plt.figure(figsize=(10, 6))
plt.title("Impact of Generosity on Happiness Score in 2017")
plt.xlabel("Happiness_Score")
plt.ylabel("Generosity")
plt.scatter(Happiness_2017_df.Happiness_Score, Happiness_2017_df.Generosity)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()



############## Information about 2018 ########################################################################################################
print("#######################    2018   ###################################")

pd.set_option('display.max_columns', None)

# Add year column to data
Happiness_2018["Year"] = "2018"

# Convert to DataFrame
Happiness_2018_df = pd.DataFrame(data=Happiness_2018)
Happiness_2018_df.index = Happiness_2018_df.index+1


#Trust has value 1, which indicates at least one value is missing
#Replacing missing value with median
median = Happiness_2018_df['Trust'].median()
Happiness_2018_df['Trust'].fillna(median, inplace=True)

print("\n Sumary \n",Happiness_2018_df.describe())
print("\n Top 5 first rank \n",Happiness_2018_df.head())
print("\n Top 5 last rank \n",Happiness_2018_df.tail())

#Correlation matrix
happiness_relationship = Happiness_2018_df.corr()
sns.heatmap(happiness_relationship, annot=True)
plt.xticks(rotation=20, fontsize=10)
plt.show()

#STRONG IMPACT
strong_impact = happiness_relationship[happiness_relationship >= 0.70]
print("\n Strong impact \n",strong_impact)

#Economy,Family,Health

#Economy
plt.figure(figsize=(10, 6))
plt.title("Impact of Economy on Happiness Score in 2018")
plt.xlabel("Happiness_Score")
plt.ylabel("Economy")
plt.scatter(Happiness_2018_df.Happiness_Score, Happiness_2018_df.Economy)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#Health
plt.figure(figsize=(10, 6))
plt.title("Impact of Health on Happiness Score in 2018")
plt.xlabel("Happiness_Score")
plt.ylabel("Health")
plt.scatter(Happiness_2018_df.Happiness_Score, Happiness_2018_df.Health)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#Family
plt.figure(figsize=(10, 6))
plt.title("Impact of Family on Happiness Score in 2018")
plt.xlabel("Happiness_Score")
plt.ylabel("Family")
plt.scatter(Happiness_2018_df.Happiness_Score, Happiness_2018_df.Family)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

# WEAK IMPACT
weak_impact = happiness_relationship[(happiness_relationship >= 0.4) & (happiness_relationship < 0.70)]
print("\n Weak impact \n",weak_impact)

# Freedom
plt.figure(figsize=(10, 6))
plt.title("Impact of Freedom on Happiness Score in 2018")
plt.xlabel("Happiness_Score")
plt.ylabel("Freedom")
plt.scatter(Happiness_2018_df.Happiness_Score, Happiness_2018_df.Freedom)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#Trust
plt.figure(figsize=(10, 6))
plt.title("Impact of Trust on Happiness Score in 2018")
plt.xlabel("Happiness_Score")
plt.ylabel("Trust")
plt.scatter(Happiness_2018_df.Happiness_Score, Happiness_2018_df.Trust)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#NO IMPACT
no_impact = happiness_relationship[(happiness_relationship >= 0) & (happiness_relationship < 0.4)]
print("\n No impact \n",no_impact)

#Generosity
plt.figure(figsize=(10, 6))
plt.title("Impact of Generosity on Happiness Score in 2018")
plt.xlabel("Happiness_Score")
plt.ylabel("Generosity")
plt.scatter(Happiness_2018_df.Happiness_Score, Happiness_2018_df.Generosity)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()


############## Information about 2019 ########################################################################################################
print("#######################    2019   ###################################")


pd.set_option('display.max_columns', None)

# Add year column to data
Happiness_2019["Year"] = "2019"

# Convert to DataFrame
Happiness_2019_df = pd.DataFrame(data=Happiness_2019)
Happiness_2019_df.index = Happiness_2019_df.index+1

#Some detail about information analytic, top 5 first rank and top 5 last rank  in 2019
print("\n Sumary \n",Happiness_2019_df.describe())
print("\n Top 5 first rank \n",Happiness_2019_df.head())
print("\n Top 5 last rank \n",Happiness_2019_df.tail())

#Correlation matrix
happiness_relationship = Happiness_2019_df.corr()
sns.heatmap(happiness_relationship, annot=True)
plt.xticks(rotation=20, fontsize=10)
plt.show()

#STRONG IMPACT
strong_impact = happiness_relationship[happiness_relationship >= 0.70]
print("\n Strong impact \n",strong_impact)

#Economy,Family,Health
#Economy
plt.figure(figsize=(10, 6))
plt.title("Impact of Economy on Happiness Score in 2019")
plt.xlabel("Happiness_Score")
plt.ylabel("Economy")
plt.scatter(Happiness_2019_df.Happiness_Score, Happiness_2019_df.Economy)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#Health
plt.figure(figsize=(10, 6))
plt.title("Impact of Health on Happiness Score in 2019")
plt.xlabel("Happiness_Score")
plt.ylabel("Health")
plt.scatter(Happiness_2019_df.Happiness_Score, Happiness_2019_df.Health)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#Family
plt.figure(figsize=(10, 6))
plt.title("Impact of Family on Happiness Score in 2019")
plt.xlabel("Happiness_Score")
plt.ylabel("Family")
plt.scatter(Happiness_2019_df.Happiness_Score, Happiness_2019_df.Family)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

# WEAK IMPACT
weak_impact = happiness_relationship[(happiness_relationship >= 0.4) & (happiness_relationship < 0.70)]
print("\n Weak impact \n",weak_impact)

# Freedom
plt.figure(figsize=(10, 6))
plt.title("Impact of Freedom on Happiness Score in 2019")
plt.xlabel("Happiness_Score")
plt.ylabel("Freedom")
plt.scatter(Happiness_2019_df.Happiness_Score, Happiness_2019_df.Freedom)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()

#NO IMPACT
no_impact = happiness_relationship[(happiness_relationship >= 0) & (happiness_relationship < 0.4)]
print("\n No impact \n",no_impact)

#Generosity
plt.figure(figsize=(10, 6))
plt.title("Impact of Generosity on Happiness Score in 2019")
plt.xlabel("Happiness_Score")
plt.ylabel("Generosity")
plt.scatter(Happiness_2019_df.Happiness_Score, Happiness_2019_df.Generosity)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.xticks(rotation=360)
plt.show()

#Trust
plt.figure(figsize=(10, 6))
plt.title("Impact of Trust on Happiness Score in 2019")
plt.xlabel("Happiness_Score")
plt.ylabel("Trust")
plt.scatter(Happiness_2019_df.Happiness_Score, Happiness_2019_df.Trust)
y_lim = plt.ylim()
x_lim = plt.xlim()
plt.xticks(rotation=360)
plt.plot(x_lim, y_lim, color="green")
plt.ylim(y_lim)
plt.xlim(x_lim)
plt.show()