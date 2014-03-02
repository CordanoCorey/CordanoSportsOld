//
//  TeamsViewController.h
//  CordanoSports
//
//  Created by Corey Gelbaugh on 2/16/14.
//  Copyright (c) 2014 Corey Gelbaugh. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "TeamViewController.h"

@interface TeamsViewController : UITableViewController <TeamViewControllerDelegate>
    @property (weak, nonatomic) IBOutlet UIBarButtonItem *sidebarButton;
    @property (nonatomic, strong) IBOutlet UITableView *teamsTable;
@end
